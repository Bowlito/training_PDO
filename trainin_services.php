<?php

include "./trainin_repository.php";

function list_it($users)
{

    $users = select_all();
    $list = "<ul>";
    foreach ($users as $key => $user) {
        $modifier = "<a href='./users.php?id=$user[0]'>Modifier vos informations</a>";
        $list .= "<li>$user[3] $modifier</li>";
    }
    $list .= "</ul>";
    return $list;
}


function see_user($user){
    $id = $_GET['id'];
    $infos = "<ul>";
    $user = select_by_id($id);

    foreach ($user as $key => $value) {
        $infos.= "<li> Nom : $value[2]</li>"."<li> Pseudo : $value[3]</li>";
    }
    $infos .= "</ul>";
    
    return $infos;
}

function modify_this(){
    
    $new_username = $_POST['new_username'];
    $new_name = $_POST['new_name'];
    $user_id = $_GET['id'];
        
    return modify_infos($new_username, $new_name,$user_id);
}
