<?php

session_start();

include_once "connexion.php";

$pseudo = isset($_POST['Pseudo']) ? $_POST['Pseudo'] : '';
$prenom = isset($_POST['Prenom']) ? $_POST['Prenom'] : '';
$profil = $_FILES['Profil']['tmp_name'];
$type = $_FILES['Profil']['type'];
$avatar = $_FILES['Profil']['name'];
$avatar = explode('.', $avatar);
$rand = (int) rand(0, 1000);
$avatar = $avatar[0].$rand.'.'.$avatar[1];
$jeu = isset($_POST['Jeu']) ? $_POST['Jeu'] : '';
$mail = isset($_POST['Mail']) ? $_POST['Mail'] : '';
$date = isset($_POST['dateNaissance']) ? $_POST['dateNaissance'] : '';
$valider = 0;

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

$message = $avatar.$pseudo.$jeu.$mail.$prenom.$date;

if ($type == 'image/png' || $type == 'image/jpg' || $type == 'image/jpeg') {
    $res = move_uploaded_file($_FILES['Profil']['tmp_name'], '/var/www/html/Challenge/img/'.$avatar);
    if ($pseudo != '' && $prenom != '' && $jeu != '' && $mail != '' && $date != '' && $profil != '') {
        $res = mysqli_query($cnx,
    "INSERT INTO amis (Avatar, Pseudo, Jeux, Mail, Prenom, Naissance, valider)
    VALUES ('$avatar','$pseudo','$jeu','$mail','$prenom','$date','$valider')");
        require '../mail/class.phpmailer.php';
        require '../mail/class.smtp.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = '';
        $mail->Port = '';
        $mail->Username = '';
        $mail->Password = '';
        $mail->SetFrom('', '');
        $mail->Subject = '';
        $mail->MsgHTML($message);
        $mail->AddAddress('');
        if ($mail->Send()) {
            echo '<br /><br />Mail sent!';
        } else {
            echo '<br /><br />Mailer Error: '.$mail->ErrorInfo;
        }
    }
} else {
    $res = 0;
}

$dir = $_SERVER['DOCUMENT_ROOT'].'/Challenge/img/';
$filelist = scandir($dir);
array_splice($filelist, 0, 2);

header('location:admin.php');
