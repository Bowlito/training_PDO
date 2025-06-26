<?php
include './trainin_repository.php';

if (str_contains($_SERVER['HTTP_REFERER'], "index.php") and $_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id'];
    select_by_id($id);
    header("location: users.php");
    die();
} else {
    header("location: homepage.php");
    die();
}