<?php

$cnx = mysqli_connect('localhost', 'root', 'codeurKiFFeur', 'Challenge') or
die('error='.mysqli_connect_errno());

$numid = $_GET['valid'];

$res = mysqli_query($cnx, "UPDATE amis SET valider=1 WHERE id='$numid'");

header('location:admin.php');
