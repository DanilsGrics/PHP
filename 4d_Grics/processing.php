<?php
/**
 * Created by PhpStorm.
 * User: BestUser
 * Date: 03.10.2018
 * Time: 14:58
 */

$persname = $_POST['persname'];
$surname = $_POST['surname'];
$id = $_POST['id'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = "Name: " . $persname . ", ";
$text .= "Surame: " . $surname . ", ";
$text .= "ID: " .$id. ", ";
$text .= "Phone Number: " . $phone . ", ";
$text .= "E-mail: " . $email;
if (!empty($persname) && !empty($surname) && !empty($id) && !empty($phone) && !empty($email))
{
    $f = fopen("dati.txt", "w") or die("Can't open or make file!");
    fwrite ($f,$text);
    fclose ($f);

    echo 'Data was submitted in the "dati.txt" successfully! <br> File contents:';

    $fp = fopen("dati.txt", "r");
    if ($fp) {
        while (!feof($fp)) {
            $mytext = fgets($fp, 999);
            echo "<br>" . $mytext ."<br />";
        }
    }
    else echo "Reading Error!";
    fclose($fp);
}
else echo "You must enter information into all of fields!";

