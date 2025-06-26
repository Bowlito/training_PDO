<?php

function select_by_id($id)
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "training";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "SELECT * FROM utilisateurs WHERE id = :id";
        $query = $pdo->prepare($select);
        $query->bindValue("id", $id);
        $query->execute();
        $resultat = $query->fetchAll();
        return $resultat;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
function select_all()
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "training";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "SELECT * FROM utilisateurs";
        $query = $pdo->query($select);
        $resultat = $query->fetchAll();
        return $resultat;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function modify_infos($new_name, $new_username)
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "training";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $update = "UPDATE utilisateurs SET 'username' = :new_username, 'nom' = :new_name' ";
        $query = $pdo->prepare($update);
        $query->bindValue("new_username", $new_username);
        $query->bindValue("new_name", $new_name);
        $query->execute(); 
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
