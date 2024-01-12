<?php
include("database.php");



if($_SERVER["REQUEST_METHOD"] == 'POST'){
// confirmation
    $userConfirmation = trim($_POST["confirmationCode"]);
    if($userConfirmation == $_SESSION["confirmation_code"]){
        header("Location: index.php");
    }
    else{
        header("Location: another_page.php");
    }
}