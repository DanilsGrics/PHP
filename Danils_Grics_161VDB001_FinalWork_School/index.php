<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 0:59
 */

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Nepieciešams ieiet sistēmā!";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jūsu konts</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>Jūsu konts</h2>
</div>
<div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['username']) && isset($_SESSION['isTeacher'])) : ?>
        <p>Sveiki, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
        <div>
            <a href="index.php?logout='1'" style="text-decoration: none">
                <button style="margin-top: 10px" type="submit" class="exit_button" name="logout">Iziet</button>
            </a>
            <a href="change_password.php" style="text-decoration: none">
                <button style="margin-top: 10px" type="submit" class="button" name="change_password">Mainīt paroli
                </button>
            </a>
            <a href="student_list.php" style="text-decoration: none">
                <button style="margin-top: 10px" type="submit" class="secondary_button" name="student_list">Skolnieku
                    saraksts
                </button>
            </a>
        </div>
    <?php elseif (isset($_SESSION['username'])) : ?>
        <p>Sveiki, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
        <div>
            <a href="index.php?logout='1'" style="text-decoration: none">
                <button style="margin-top: 10px" type="submit" class="exit_button" name="logout">Iziet</button>
            </a>
            <a href="change_password.php" style="text-decoration: none">
                <button style="margin-top: 10px" type="submit" class="button" name="change_password">Mainīt paroli
                </button>
            </a>
            <a href="marks.php" style="text-decoration: none">
                <button type="submit" class="secondary_button" name="show_marks">Manas atzīmes</button>
            </a>

        </div>
    <?php endif ?>
</div>
<div class="copyright">&copy;2018 - <strong>Danils Grics</strong></div>
</body>
</html>