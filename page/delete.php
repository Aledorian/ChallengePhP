<?php

include_once "connexion.php";


$checkbox = isset($_POST['checkbox']);
$checkbox = (int) $checkbox;

if (isset($_GET['suppr'])) {
    $numid = $_GET['suppr'];
} else {
    $numid = '';
}

if ($checkbox == 0) {
    header('location:admin.php');
} else {
    $res = mysqli_query($cnx, "DELETE FROM amis WHERE id='$numid'");
    header('location:admin.php');
}
