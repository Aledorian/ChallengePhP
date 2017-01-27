<?php


$cnx = mysqli_connect('localhost', 'root', 'codeurKiFFeur', 'Challenge') or
die('error='.mysqli_connect_errno());

$res = mysqli_query($cnx, 'SELECT * FROM custom WHERE id=1');
$data = mysqli_fetch_assoc($res);

 ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>

      @import url("https://fonts.googleapis.com/css?family=<?php echo $data['font']?>");

      th, td{
        width: 200px;
        border: 1px solid black;
        padding: 0 10 0 10px;
        text-align: center;
      }
      td{
        text-align: center;
      }
      table{
        border: 1px solid black;
        margin: auto;
      }
      h1, h2, h3, h4, h5, h6 {
            color: <?php echo $data['title']; ?>;
            font-family : <?php echo $data['font']; ?>;
         }
      nav {
        background-color: <?php echo $data['navbar']; ?>!important;
      }
      a{
        color: <?php echo $data['url']; ?>!important;
      }
      button{
        background-color: <?php echo $data['button']; ?>;
      }
    </style>

  </head>
  <body>
    <?php

      if ($data['fixed'] == 1) {
          echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
      } else {
          echo '<nav class="navbar navbar-inverse" role="navigation" style="margin-top: -50px; margin-bottom: 0px;">';
      }

     ?>
        <div class="container">
            <!-- Left -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
            </div>
            <!-- Right -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="repertory.php">Repertory</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                      <?php
                      $_SESSION['log'] = isset($_SESSION['log']) ? $_SESSION['log'] : '';

                      if ($_SESSION['log'] === true) {
                          echo "<a href='admin.php'> Admin</a>
                              </li>
                                <li>
                                <a href='logout.php'>Deco</a>
                                </li>";
                      } else {
                          echo "<a href='login.php'> Connexion</a>";
                      }
                       ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
