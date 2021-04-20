<?php 
function API_USERS()
{
    $data = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/users"));
    return $data;
}
function API_USERS_ID($id)
{
    $data = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/posts?userId=".$id));
    return $data;
}
function API_FIND_USERS_ID($id)
{
    $data = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/users?id=".$id));
    return $data;
}
function API_DETAIL_POST($id)
{
    $data[] = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/posts/".$id));
    return $data;
}