<?php
// 6d6c634b3a49e507e989e81df9afa066-7ecaf6b5-956b54f2
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("database.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\PHPMailer\PHPMailer.php';
require 'PHPMailer\PHPMailer\SMTP.php';
require 'PHPMailer\PHPMailer\Exception.php';


if($_SERVER["REQUEST_METHOD"] == 'POST'){
    // registration
   
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $username = explode(" ", $username);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);
    $address = trim($_POST["address"]);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $ssnumber = $_POST["ssnumber"];

    $ID_malade = $ssnumber;
    $Nom_malade = $username[0];
    $Prenom_malade = $username[1];
    $Numero_tel_malade = "$phone";
    $Email_malade = $email;
    $Mot_de_passe_malade = password_hash($password, PASSWORD_DEFAULT);
    $Addresse_malade = $address;

    $sql_insert = "INSERT INTO malades (ID_malade, Nom_malade, Prenom_malade, Numero_tel_malade, Email_malade, Mot_de_passe_malade, Addresse_malade) 
        VALUES ('$ID_malade', '$Nom_malade', '$Prenom_malade', '$Numero_tel_malade', '$Email_malade', '$Mot_de_passe_malade', '$Addresse_malade')";

    try {
        mysqli_query($conn, $sql_insert);
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
    
    $confirmationCode = bin2hex(random_bytes(16));
    $_SESSION['confirmation_code'] = $confirmationCode;

    
}