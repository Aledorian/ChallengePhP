<?php
session_start();

$cnx= mysqli_connect("localhost", "root", "codeurKiFFeur", "Challenge") or
die("error=".mysqli_connect_errno());

$username = isset($_POST['username'])? $_POST['username'] : "";
$password = isset($_POST['mdp'])? $_POST['mdp'] : "";

$pseudo = mysqli_real_escape_string($cnx, $username);
$mdp = mysqli_real_escape_string($cnx, $password);

$res = mysqli_query($cnx,"SELECT * FROM challenge WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($res);

if ( $data['username']== $username && $data['password'] == $password) {
  $_SESSION['log'] = true;}
else{
  $_SESSION['log'] = false;
}

header('location:../index.php')

 ?>
