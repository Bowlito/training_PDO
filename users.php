<?php

include "./trainin_services.php";
$id = $_GET['id'];
$user = see_user(select_by_id($id));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <?php include "./_menu.php" ?>
    <h1>Votre profil</h1>
    <div>
        <?= $user ?>
    </div>
    <h2>Modifiez vos informations</h2>
    <form action="index.php" method="POST">
        <div>
            <label for="new_name">Nouveau nom</label>
            <input type="text" name="new_name">
        </div>
        <div>
            <label for="new_username">Nouveau Pseudo</label>
            <input type="text" name="new_username">
        </div>
        <button type="submit">Validez les changements</button>

    </form>

</body>

</html>