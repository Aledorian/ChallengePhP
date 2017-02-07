<?php
session_start();

include_once "connexion.php";

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
      th, td{
        width: 200px;
        border: 1px solid black;
        padding: 10px;
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
          echo '<nav class="navbar navbar-inverse" role="navigation" style="margin-top: -50px">';
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
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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


      <form action="customization_check.php" method="POST">
      <label for='coltitle'> Title's color : </label>
      <input  type="text" name="coltitle" value=""/><br>

      <label for='colnavbar'> Navbar color : </label>
      <input type="text" name="colnavbar" value=""/><br>

      <label for='colurl'> Url's color : </label>
      <input type="text" name="colurl" value=""/><br>

      <label for='colbutton'> Button's color : </label>
      <input type="text" name="colbutton" value=""/><br>

      <?php
      if ($data['arrow'] == 0) {
          echo '<input type="checkbox" name="arrow" value=""/>Flèches slider<br>';
      } else {
          echo '<input type="checkbox" name="arrow" value="" checked/> Flèches slider<br>';
      }

      if ($data['fixed'] == 0) {
          echo '<input type="checkbox" name="fixed" value=""/>navbar fix<br>';
      } else {
          echo '<input type="checkbox" name="fixed" value="" checked/> navbar fix<br>';
      }

      if ($data['snow'] == 0) {
          echo '<input type="checkbox" name="snow" value=""/>Neige<br>';
      } else {
          echo '<input type="checkbox" name="snow" value="" checked/> Neige<br>';
      }
          echo '<select name="font">
          					<option value="Lemonada">Lemonada</option>
          					<option value="Pacifico">Pacifico</option>
          					<option value="Acme">Acme</option>
          					<option value="Satisfy">Satisfy</option>
          					<option value="Montez">Montez</option>
          					<option value="Aladin">Aladin</option>
          				</select>';
        echo '<br>';
          ?>
        <input type='submit' name='submit' value='Submit'/>
        </form>
        <?php

          $res = mysqli_query($cnx, 'SELECT * FROM amis');

            echo '<table>';
          $data = mysqli_fetch_assoc($res);

            foreach ($data as $key => $value) {
                echo "<th>$key</th>";
            }

           mysqli_data_seek($res, 0);

          while ($data = mysqli_fetch_assoc($res)) {
              echo '<tr>';

              foreach ($data as $key => $value) {
                  if ($key != 'Avatar') {
                      echo '<td>'
                .$value.
                '</td>';
                  } else {
                      echo "<td><img class='col-md-12'src ='../img/".$value."'></td>";
                  }
              }
              echo "<td><a href='validate.php?valid=".$data['id']."'>Valider</a></td>";
              echo "<td><a href='modif.php?modif=".$data['id']."'>Modifier</a></td>";
              echo "<td>
                  <form action ='delete.php?suppr=".$data['id']."' method='post' >
                    <input type='checkbox' name='checkbox'>Sûre
                    <input type='submit' name ='tsurgro' id='tsurgro' value = 'Supprimer  '></td>
                  </form>";

              echo '</tr>';
          }

      echo '</table>';
      ?>


  </body>
       <?php include_once 'snow.php'?>
</html>
