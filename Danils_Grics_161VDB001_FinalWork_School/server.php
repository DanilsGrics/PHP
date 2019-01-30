<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 12.12.2018
 * Time: 0:14
 */

session_start();

$username = "";
$email = "";
$errors = array();

$conn = new mysqli("localhost", "root", "", "schooldb");

if ($conn->connect_error) {
    die("Neizdēvas piesaistīties: " . $conn->connect_error);
}

if (isset($_POST['reg_user'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($conn, $_POST['password_confirm']);

    if (empty($username)) {
        array_push($errors, "Nepieciešams ievadīt lietotājvārdu!");
    }
    if (empty($email)) {
        array_push($errors, "Nepieciešams ievadīt E-mail!");
    }
    if (empty($password)) {
        array_push($errors, "Nepieciešams ievadīt paroli!!");
    }
    if ($password != $password_confirm) {
        array_push($errors, "Pārbaudiet paroļu sakrišanu!");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {

        if ($user['username'] === $username) {
            array_push($errors, "Lietotājs ar šādu lietotājvārdu jau eksistē!");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Lietotājs ar šādu E-mail jau eksistē!");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $query = "INSERT INTO users (username, email, password)
        VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $query);

        $query = "SELECT MAX(id) FROM users";
        $id = mysqli_query($conn, $query);
        $latestid = mysqli_fetch_assoc($id);
        $id = implode($latestid);

        $query = "INSERT INTO marks (user_id, latvian, math, russian) VALUES ('$id', '0', '0', '0')";
        mysqli_query($conn, $query);


        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Lietotājs veiksmīgi reģistrēts!";
        header('location: index.php');
    }
}

if (isset($_POST['regbutton'])) {
    header('location: register.php');
}

if (isset($_POST['logbutton'])) {
    header('location: login.php');
}

if (isset($_POST['change_password'])) {

    if (!isset($_SESSION['username'])) exit;

    $password = $_POST['password'];
    $new_password = $_POST['new_password'];

    $username = $_SESSION['username'];

    if (empty($password)) {
        array_push($errors, "Nepieciešams ievadīt tekošo paroli!");
    }

    if (empty($new_password)) {
        array_push($errors, "Nepieciešams ievadīt jauno paroli!");
    }

    if (count($errors) == 0 && isset($_SESSION['isTeacher'])) {

        $query = "SELECT * FROM teachers WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);

        if (mysqli_num_rows($results) == 1) {

            $query = "UPDATE teachers SET password =('$new_password') WHERE username='$username' AND password='$password'";
            mysqli_query($conn, $query);
            $_SESSION['success'] = "Parole veiksmīgi mainīta!";
            header('location: index.php');
        } else {

            array_push($errors, "Tekoša parole ir nepareiza!");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);

        if (mysqli_num_rows($results) == 1) {

            $new_password = md5($new_password);

            $query = "UPDATE users SET password =('$new_password') WHERE username='$username' AND password='$password'";
            mysqli_query($conn, $query);
            $_SESSION['success'] = "Parole veiksmīgi mainīta!";
            header('location: index.php');
        } else {

            array_push($errors, "Tekoša parole ir nepareiza!");
        }
    }
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Nepieciešams ievadīt lietotājvārdu!");
    }
    if (empty($password)) {
        array_push($errors, "Nepieciešams ievadīt paroli!");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Veiksmīga ieeja!";
            header('location: index.php');
        } else {

            array_push($errors, "Šāds lietotājs neeksistē vai parole ir nepareiza!");
        }
    }
}

if (isset($_POST['login_teacher'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Nepieciešams ievadīt lietotājvārdu!");
    }

    if (empty($password)) {
        array_push($errors, "Nepieciešams ievadīt paroli!");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM teachers WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['isTeacher'] = $username;
            $_SESSION['success'] = "Veiksmīga ieeja kā skolotājs!";
            header('location: index.php');
        } else {

            array_push($errors, "Šāds lietotājs neeksistē vai parole ir nepareiza!");
        }
    }
}