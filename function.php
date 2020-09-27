<?php
require_once 'dataBase.php';

function get_category (){
    global $link;
    $sql = "SELECT * FROM `info`";

    $result = mysqli_query($link, $sql);

    $category = mysqli_fetch_all($result,MYSQLI_ASSOC);

    return $category;
}

function get_category_id($category_id){
    global $link;
    $sql = "SELECT * FROM info WHERE id= '".$category_id."'";
    $res = mysqli_query($link, $sql);
    $title = mysqli_fetch_assoc($res);
    return $title;

}










?>
