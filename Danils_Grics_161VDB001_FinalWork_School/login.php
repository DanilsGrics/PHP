<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 0:51
 */

include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Ieiet skolas sistēmā</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Ieiet sistēmā</h2>
</div>

<ul>
    <li><a class="active" href="register.php">Reģistrēties!</a></li>
    <li><a href="gallery.php">Galerija</a></li>
</ul>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Lietotājvārds</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label>Parole</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <div>
            <button style="margin-top: 10px" type="submit" class="button" name="login_user">Ieiet kā skolnieks</button>
            <button style="margin-top: 10px" type="submit" class="exit_button" name="login_teacher">Ieiet kā skolotājs</button>
        </div>
    </div>
    </div>
</form>
<div class="copyright">&copy;2018 - <strong>Danils Grics</strong></div>
</body>
</html>