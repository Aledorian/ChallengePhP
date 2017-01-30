<?php

session_start();
include_once 'navbar.php';
include_once 'connexion.php';


$res = mysqli_query($cnx, 'SELECT Avatar, Pseudo, Jeux, Mail, Prenom, Naissance FROM amis WHERE valider = 1');
$data = mysqli_fetch_assoc($res);

 ?>

<!DOCTYPE html>
<html lang="fr">

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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
      .grid-item {
        width: 200px;
        height: 200px;

      }
    </style>


</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>

        <!-- /.row -->

        <!-- Friends Row -->
        <div class="row">
          <?php
          mysqli_data_seek($res, 0);
          while ($data = mysqli_fetch_assoc($res)) {
              echo '<div class="col-md-4 img-portfolio">
                <img class="img-responsive img-portfolio img-hover grid-item" src="../img/'.$data['Avatar'].'" alt="">
                <h3>'.$data['Prenom'].'</h3>
                <p>22 ans <span>'.$data['Naissance'].'</span></p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                <h4>Games</h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>Game</td>
                            <th>Username</td>
                        </tr>
                    </thead>
                    <tr>
                        <td>'.$data['Jeux'].'</td>
                        <td>'.$data['Pseudo'].'</td>
                    </tr>
                </table>
            </div>';
          }
          ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
     <?php include_once 'snow.php'?>


</body>
</html>
