<div id="formSubmit">
    <p class="titleConnSub">Créer un compte</p>
    <form enctype="multipart/form-data" method="POST" action="index.php?uc=accueil&action=checkSubmit">
        <p class="formInputs">Login : </p>
        <input type="text" class="formInputs" placeholder="login" name="login">
        <p class="formInputs">Mot de passe : </p>
        <input type="password" class="formInputs" placeholder="password" name="password">
        <p class="formInputs">Photo de profil</p><input type="file" name="pp" class="formInputs">
        <p class="formInputs">Username : </p>
        <input type="text" class="formInputs" placeholder="username" name="username">
        <input type="checkbox" name="useConditions">
        <span id="condtionsTerms"> J'ai lu et accepté les <a href="https://discord.com/terms" class="realLinks" target="_blank">Conditions d'Utilisation</a> et la <a href="https://discord.com/privacy" class="realLinks" target="_blank">Politique de Confidentialité</a> de 10 cordes</span>
        <input type="submit" value="S'inscire">
    </form>
    <a href="index.php?uc=accueil&action=connect" id="goConnect">Tu as déjà un compte ?</a>
</div>