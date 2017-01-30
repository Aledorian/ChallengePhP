<?php

include_once 'connexion.php';

$numid = $_GET['valid'];

$res = mysqli_query($cnx, "UPDATE amis SET valider=1 WHERE id='$numid'");

header('location:admin.php');
