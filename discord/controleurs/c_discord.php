<?php

if (!isset($_GET['action'])) {
    $action = "acceuil";
} else {
    $action = $_GET['action'];
}

switch ($action) {
    case "accueil": {
            $users = $pdo->getUsers($username);
            include("vues/v_contact_list.php");
            include("vues/v_accueilDiscord.php");
            break;
        }
    case "chat": {
            $users = $pdo->getUsers($username);
            include("vues/v_contact_list.php");
            $conversation = $pdo->getConversation($_GET['id'], $username, $idSender);
            include("vues/v_chat.php");
            break;
        }

    case "sendChat": {
            $messageAleatoire = $pdo->getMessageAlea();
            $message = $_POST['msg'];
            if ($_FILES) {
                $file = $_FILES['photo']['tmp_name'];
                $name = $_FILES['photo']['name'];
                $res = $pdo->sendChat($message, $messageAleatoire['messageAlea'], $_GET['id'], $idSender, $name);
                if ($res){
                    move_uploaded_file($file, 'images/conversationsPic/' . $name);
                }
            } else {
                $pdo->sendChat($message, $messageAleatoire['messageAlea'], $_GET['id'], $idSender, "");
            }
            $conversation = $pdo->getConversation($_GET['id'], $username, $idSender);
            $users = $pdo->getUsers($username);
            include("vues/v_contact_list.php");
            include("vues/v_chat.php");
            break;
        }
}

?>