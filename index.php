<?php

include_once("page/connexion.php");

$res = mysqli_query($cnx, 'SELECT * FROM custom WHERE id=1');
$data = mysqli_fetch_assoc($res);

session_start();
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
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
    h1, h2, h3, h4, h5, h6 {
          color: <?php echo $data['title']; ?>;
       }
    nav {
      background-color: <?php echo $data['navbar']; ?>!important;
    }
    a{
      color: <?php echo $data['url']; ?>!important;
    }
    .btn{
      background-color: <?php echo $data['button']; ?>!important;
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
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
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Right -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="page/repertory.php">Repertory</a>
                    </li>
                    <li>
                        <a href="page/about.php">About</a>
                    </li>
                    <li>
                        <a href="page/contact.php">Contact</a>
                    </li>
                    <li>
                      <?php
                      $_SESSION['log'] = isset($_SESSION['log']) ? $_SESSION['log'] : '';

                      if ($_SESSION['log'] === true) {
                          echo "<a href='page/admin.php'> Admin</a>
                              </li>
                                <li>
                                <a href='page/logout.php'>Deco</a>
                                </li>";
                      } else {
                          echo "<a href='page/login.php'> Connexion</a>";
                      }
                       ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indic -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Title 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Title 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>title 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <?php if ($data['arrow'] == 1) {
                           echo '<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>';
                       }

    ?>

    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome !
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Lorem ipsum7</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Dolor Sit</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Amet</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Repertory Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Last creation</h2>
            </div>


            <?php

            $res1 = mysqli_query($cnx, 'SELECT * FROM amis WHERE valider=1 ORDER BY id DESC LIMIT 6 ');
            while ($data1 = mysqli_fetch_assoc($res1)) {
                    echo '<div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                <img class="img-responsive img-portfolio img-hover" src="./img/'.$data1['Avatar'].'" alt="">
                </a>
                </div>';
                }


            ?>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

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
    <script src="./js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
    <?php

      if ($data['snow'] == 1) {
          echo '<script src="js/snowstorm.js"></script>';
          echo "<script>
              snowStorm.snowColor = '#F8F8FF';   // blue-ish snow!?
              snowStorm.flakesMaxActive = 96;    // show more snow on screen at once
              snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
              </script>";
      }

    ?>

</body>

</html>
