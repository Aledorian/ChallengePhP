<?php

session_start();
include_once 'navbar.php';

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

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-4">
                <!-- Contact form -->
                <form id="contactForm" action="contactCheck.php" method="post" enctype="multipart/form-data">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Pseudo:</label>
                            <input type="text" class="form-control" id="Pseudo" name="Pseudo">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Prénom:</label>
                            <input type="text" class="form-control" id="Prenom" name="Prenom">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Img de profil:</label>
                            <input type="file" class="form-control" id="Profil" name="Profil">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Adresse mail:</label>
                            <input type="email" class="form-control" id="mail" name="Mail">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Jeu:</label>
                            <input type="text" class="form-control" id="jeu" name="Jeu">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Date de naissance:</label>
                            <input type="text" class="form-control" id="dateNaissance" name="dateNaissance">
                        </div>
                    </div>

                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
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

</body>
     <?php include_once 'snow.php'?>

</html>
