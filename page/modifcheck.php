  <?php

session_start();

include_once "connexion.php";

$numid = $_POST['modif'];

$res = mysqli_query($cnx, "SELECT * FROM amis WHERE id='$numid'");
$data = mysqli_fetch_assoc($res);

$pseudo = isset($_POST['Pseudo']) ? trim($_POST['Pseudo']) : '';
$prenom = isset($_POST['Prenom']) ? trim($_POST['Prenom']) : '';
$profil = $_FILES['Profil']['tmp_name'];
$type = $_FILES['Profil']['type'];
$avatar = $_FILES['Profil']['name'];
$jeu = isset($_POST['Jeu']) ? trim($_POST['Jeu']) : '';
$mail = isset($_POST['Mail']) ? trim($_POST['Mail']) : '';
$date = isset($_POST['dateNaissance']) ? trim($_POST['dateNaissance']) : '';

$verifName = '#[^0-9]#';
$verifPseudo = '#^[a-zA-Z]#';
$verifDate = '#[0-9]{2}/[0-9]{2}/[0-9]{4}#';

if (preg_match($verifName, $prenom)) {
    $prenom = $prenom;
} else {
    $prenom = '';
}
if (preg_match($verifPseudo, $pseudo)) {
    $pseudo = $pseudo;
} else {
    $pseudo = '';
}
if (preg_match($verifDate, $date)) {
    $date = $date;
} else {
    $date = '';
}

$arrayQuery = array();

if ($pseudo) {
    array_push($arrayQuery, "Pseudo='$pseudo'");
}
if ($avatar) {
    array_push($arrayQuery, "Avatar='$avatar'");
}
if ($prenom) {
    array_push($arrayQuery, "Prenom='$prenom'");
}
if ($jeu) {
    array_push($arrayQuery, "Jeux='$jeu'");
}
if ($mail) {
    array_push($arrayQuery, "Mail='$mail'");
}
if ($date) {
    array_push($arrayQuery, "Naissance='$date'");
}

$arrayQuery = implode(', ', $arrayQuery);

if ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png') {
    $res = move_uploaded_file($_FILES['profil']['tmp_name'],
'/var/www/html/challengePHP/img/'.$_FILES['profil']['name']);
}

echo "UPDATE form SET $arrayQuery WHERE id='$numid'";
 if (count($arrayQuery) != 0) {
     $res = mysqli_query($cnx, "UPDATE amis SET $arrayQuery WHERE id='$numid'");
 }
header('location:admin.php');

 ?>
