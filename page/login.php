<?php

session_start();

include_once "connexion.php";

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';

if ($username == '') {
    echo '<form class="login" action="logincheck.php" method="post">';
    echo    '<input type="text" name="username" value="" placeholder="Username">';
    echo    '<br>';
    echo    '<input type="password" name="mdp" value="" placeholder="Password">';
    echo    '<br>';
    echo    '<input type="submit" name="submit" value="Login"/>';
    echo '</form>';
} else {
    header('location:admin.php');
}
