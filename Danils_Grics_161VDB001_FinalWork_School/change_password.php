<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 1:19
 */

include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Paroles maiņa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Paroles maiņa</h2>
</div>

<form method="post" action="change_password.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Tekošā parole</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <label>Jaunā parole</label>
        <input type="password" name="new_password">
    </div>
    <div class="input-group" style="margin-bottom: 10px">
        <button type="submit" class="button" name="change_password">Mainīt paroli!</button>
    </div>
    <div style="margin-bottom: 10px">
        <a href="index.php" style="text-decoration: none">
            <button type="button" class="secondary_button" name="cancel">Atpakaļ</button>
        </a>
    </div>
</form>
<div class="copyright">&copy;2018 - <strong>Danils Grics</strong></div>
</body>
</html>