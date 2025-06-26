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