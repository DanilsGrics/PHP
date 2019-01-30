<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 0:04
 */

include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Reģistrācija skolas sistēmā</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Reģistrēties</h2>
</div>

<ul>
    <li><a class="active" href="login.php">Ieiet!</a></li>
    <li><a href="gallery.php">Galerija</a></li>
</ul>

<form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Lietotājvārds</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Parole</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <label>Apstiprināt paroli</label>
        <input type="password" name="password_confirm">
    </div>
    <div class="input-group">

        <div>
            <button type="submit" class="button" name="reg_user">Reģistrēties</button>
        </div>
    </div>
</form>
<div class="copyright">&copy;2018 - <strong>Danils Grics</strong></div>
</body>
</html>