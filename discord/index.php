<?php

require_once('include/class.pdo.php');
session_start();
$pdo = PDODiscord::getPdoDiscord();

if (!isset($_GET['uc'])) {
    $uc = 'accueil';
} else {
    $uc = $_GET["uc"];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>10 Cordes</title>
</head>

<body>
    <div id="fenetre">
        <h5>10 Cordes</h5>
        <?php
        if ($_SESSION) {
            echo "<h5><a href='index.php?uc=disconnect'>Se déconnecter</a></h5>";
        }
        ?>
        <div class="container">
            <?php
            switch ($uc) {
                case "accueil": {
                        include("controleurs/c_connexion.php");
                        break;
                    }

                case "discord": {
                        $userConnected = $pdo->getInfoUser($_SESSION['login']);
                        $idSender = $userConnected['id'];
                        $username = $userConnected['username'];
                        include("controleurs/c_discord.php");
                        break;
                    }

                case "disconnect": {
                        $pdo->disconnect();
                        include("vues/v_connectSubmit.php");
                        break;
                    }
            }
            ?>
        </div>
    </div>
</body>

</html>