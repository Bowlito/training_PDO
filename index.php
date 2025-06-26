<?php

include "./trainin_services.php";


$users = list_it(select_all());

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "./_menu.php" ?>
    <h1>Liste des utilisateurs</h1>

    <div>
    <?= $users; ?>
    </div>


</body>

</html>