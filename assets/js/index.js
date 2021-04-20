$(function () {
	$('.loader').hide();
	home();
});

function home() {
	$.ajax({
		type: "GET",
		url: "pages/home.php",
		data: {},
		success: function(data) {
			$('#page-section').html(data);
		}
	});
}

function showAllPosts(id) {
	$('.showPosts').hide();
	$('.loader-label').html("Currently Loading <i class='fas fa-circle-notch fa-spin ml-2'></i>");
	$('.loader').show();
	
	$.ajax({
		type: "GET",
		url: "pages/posts.php?user=" + id,
		data: {},
		success: function(data) {
			$('.loader').hide();
			$('#page-section').html(data);
		}
	});
}

function showDetailPost(id) {
	$('.showDetailPosts').hide();
	$('.loader-label').html("Currently Loading <i class='fas fa-circle-notch fa-spin ml-2'></i>");
	$('.loader').show();
	
	$.ajax({
		type: "GET",
		url: "pages/postDetail.php?postId=" + id,
		data: {},
		success: function(data) {
			$('.loader').hide();
			$('#page-section').html(data);
		}
	});
}