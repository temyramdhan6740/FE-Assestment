<?php include "structure.php" ?>
<div class="container">
    <div class="row">
        <?php foreach (API_DETAIL_POST($_GET['postId']) as $ADP) { ?>
            <div class="col-lg-12">
                <div class="card my-2">
                    <div class="card-body">
                        <table class="mb-5">
                            <tbody>
                                <tr>
                                    <th colspan="3">
                                        <?= $ADP->title ?>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr /></td>
                                </tr>
                                <tr>
                                    <th>Author</th>
                                    <td width="50" class="text-center">:</td>
                                    <td>
                                        <?php foreach (API_FIND_USERS_ID($ADP->userId) as $AFUD) {
                                            echo $AFUD->name;
                                        } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
						<?= $ADP->body ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>