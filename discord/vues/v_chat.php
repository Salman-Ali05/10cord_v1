<div id="chat">
    <?php

    // automatisé avec plusieurs conversation, ici ça marchera qu'avec une seule
    foreach ($users as $oneUser) {
        if ($_GET['id'] == $oneUser['id']) {
            $idRecever = $oneUser['id'];
            $usedname = $oneUser['username'];
            break;
        }
    }
    foreach ($conversation as $unDialogue) {
        echo "<h5>" . $usedname . "</h5>";
        echo "<div class='messRecv'>";
        if ($unDialogue['messagesReçus'] != null) {
            echo "<p>" . $unDialogue['messagesReçus'] . "</p>";
        }
        echo "</div>";

        echo "<div  class='messSend'>";
            echo "<h5>" . $username . "</h5>";
            if ($unDialogue['messagesEnvoyes'] != null) {
                echo "<p>" . $unDialogue['messagesEnvoyes'] . "</p>";
            }
            if ($unDialogue['image'] != ""){
                echo "<br><img src='" . $unDialogue['image'] . "' id='imgConv'>";
            }
        echo "</div>";
        echo "<br>";
    }


    ?>
    <!-- to upload files : enctype="multipart/form-data" -->
    <form action="index.php?uc=discord&action=sendChat&id=<?php echo $idRecever; ?>" enctype="multipart/form-data" method="POST">
        <input type="text" id="msg" name="msg" placeholder="Envoyer un message à @<?php echo $usedname ?>">
        <input type="file" id="file" name="photo" value="">
        <input type="submit" value="Envoyer" id="submitChat">
    </form>
</div>