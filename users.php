<?php

include "./trainin_services.php";
$id = "";
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

    <!-- <form action="" method="$_REQUEST">
        <div>
            <label for="username"></label>
        </div>
    </form> -->

</body>
</html>