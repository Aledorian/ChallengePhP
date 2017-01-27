<?php

session_start();

$cnx = mysqli_connect('localhost', 'root', 'codeurKiFFeur', 'Challenge') or
die('error='.mysqli_connect_errno());

  $coltitle = isset($_POST['coltitle']) ? $_POST['coltitle'] : '';
  $colnavbar = isset($_POST['colnavbar']) ? $_POST['colnavbar'] : '';
  $colurl = isset($_POST['colurl']) ? $_POST['colurl'] : '';
  $colbutton = isset($_POST['colbutton']) ? $_POST['colbutton'] : '';

  $arrow = isset($_POST['arrow']);
  $arrow = (int) $arrow;

  $fixed = isset($_POST['fixed']);
  $fixed = (int) $fixed;

  $snow = isset($_POST['snow']);
  $snow = (int) $snow;

  $font = isset($_POST['font'])? $_POST['font'] : "";


  $res = mysqli_query($cnx, "UPDATE custom SET arrow='$arrow' WHERE id=1");
  $res = mysqli_query($cnx, "UPDATE custom SET fixed='$fixed' WHERE id=1");
  $res = mysqli_query($cnx, "UPDATE custom SET snow='$snow' WHERE id=1");
  $res = mysqli_query($cnx, "UPDATE custom SET font='$font' WHERE id=1");


if ($coltitle != '') {
    $res = mysqli_query($cnx, "UPDATE custom SET title='$coltitle' WHERE id=1");
}

if ($colnavbar != '') {
    $res = mysqli_query($cnx, "UPDATE custom SET navbar='$colnavbar' WHERE id=1");
}

if ($colurl != '') {
    $res = mysqli_query($cnx, "UPDATE custom SET url='$colurl' WHERE id=1");
}

if ($colbutton != '') {
    $res = mysqli_query($cnx, "UPDATE custom SET button='$colbutton' WHERE id=1");
}

header('location:../index.php');
