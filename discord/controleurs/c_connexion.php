<?php
if (!isset($_GET['action'])) {
    $action = "accueil";
} else {
    $action = $_GET['action'];
}
switch ($action) {
    case "accueil": {
            include("vues/v_connectSubmit.php");
            break;
        }
    case "connect": {
            include("vues/v_formConnection.php");
            echo "<a href='index.php?uc=accueil&action=accueil'>Retour</a>";
            break;
        }

    case "checkConnect": {
            $login = $_POST['login'];
            $mdp = $_POST['password'];
            $isConnect = $pdo->isConnect($login, $mdp);
            if ($isConnect) {
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $mdp;
                header("location:index.php?uc=discord&action=accueil");
            } else {
                header("location:index.php?uc=accueil&action=connect");
            }
            break;
        }

    case "submit": {
            include("vues/v_formSubmit.php");
            echo "<a href='index.php?uc=accueil&action=accueil'>Retour</a>";
            break;
        }

    case "checkSubmit": {
            $login = $_POST['login'];
            $mdp = $_POST['password'];
            $username = $_POST['username'];
            if ($login == "" || $mdp == "" || $username == ""){
                header("location:index.php?uc=accueil&action=submit");
            }else{
                if ($_FILES) {
                    $file = $_FILES['pp']['tmp_name'];
                    $pp = $_FILES['pp']['name'];
                    move_uploaded_file($file, 'images/' . $pp);
                }
                if ($pp == "") {
                    $pp = "noPic.jpeg";
                }
                $pdo->createUser($login, $mdp, $pp, $username);
                $isConnect = $pdo->isConnect($login, $mdp);
                if ($isConnect) {
                    $_SESSION['login'] = $login;
                    $_SESSION['password'] = $mdp;
                    header("location:index.php?uc=discord&action=accueil");
                } else {
                    header("location:index.php?uc=accueil&action=submit");
                }
            }
            break;
        }
}
?>