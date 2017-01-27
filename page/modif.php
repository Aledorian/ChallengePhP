
<?php

$cnx = mysqli_connect('localhost', 'root', 'codeurKiFFeur', 'Challenge') or
die('error='.mysqli_connect_errno());

$numid = $_GET['modif'];

$res = mysqli_query($cnx, "SELECT * FROM amis WHERE id='$numid'");
$data = mysqli_fetch_assoc($res);

 ?>
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


<div class="row">
    <!-- Form Column -->
    <div class="col-md-4">
        <!-- Contact form -->
        <form id="contactForm" action="modifcheck.php" method="post" enctype="multipart/form-data">
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

            <div class="control-group form-group">
                <div class="controls">
                    <input type="hidden" class="form-control" id="modif" name="modif" value="<?php echo $numid ?>">
                </div>
            </div>

            <div id="success"></div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>
