<div id="contacts">
    <br>
    <?php
    foreach ($users as $oneUser) {
        echo "<li class='contacts'><a href='index.php?uc=discord&action=chat&id=" . $oneUser['id'] . "'><img src='images/" . $oneUser["photo"] . "' id='contactPic'>";
        echo "<span class='contactUsername'>" . $oneUser["username"] . "</span></a></li><br>";
    }

    ?>
</div>