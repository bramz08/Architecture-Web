<!doctype html>
<html>
<head>
</head>
<body>
<h4>Veuillez saisir le code de sécurité</h4>
<?php
session_start();
echo"<img src='script-captchas2.php' alt='captchas'/>"
?><br>
<form action="index.php" method="POST">
<input type="text" name="captcha">
<input type="submit" name="valider" value="Valider">
</form>
</body>
</html>