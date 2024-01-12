<?php
// Include your database connection file
include("database.php"); // Modify this to the actual path of your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form with the following fields
    $idSoignant = filter_input(INPUT_POST, "ssnumber", FILTER_VALIDATE_INT);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $username = explode(" ", $username);
    $nomSoignant = $username[0];
    $prenomSoignant = $username[1];
    $emailSoignant = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $addressSoignat = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
    $specialiteSoignant = filter_input(INPUT_POST, "Specialite_soignant", FILTER_SANITIZE_STRING);
    $motDePasseSoignant = password_hash(filter_input(INPUT_POST, "mdp", FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);

    // Validate data
    if (empty($idSoignant) || empty($prenomSoignant) || empty($nomSoignant) || empty($emailSoignant) || empty($specialiteSoignant) || empty($motDePasseSoignant)) {
        echo "All fields are required.";
        exit();
    }

    // Handle file uploads
    $diplomeSoignantTmp = $_FILES["Diplome_soignant"]["tmp_name"];
    $certificatSoignantTmp = $_FILES["Certificat_soignant"]["tmp_name"];

    // Read file contents
    $diplomeSoignantContent = file_get_contents($diplomeSoignantTmp);
    $certificatSoignantContent = file_get_contents($certificatSoignantTmp);

    // Prepare and execute the SQL insert statement
    $sql_insert = "INSERT INTO soignants (ID_soignant, Nom_soignant ,Prenom_soignant, Email_soignant, Specialite_soignant, Diplome_soignant, Certificat_soignant, Mot_de_passe_soignant, Photo_soignant, adress_soignant) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql_insert); // Modify $conn to your actual database connection variable
    $nullValue = null;

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "issssbbbs", $idSoignant, $nomSoignant, $prenomSoignant, $emailSoignant, $specialiteSoignant, $diplomeSoignantContent, $certificatSoignantContent, $motDePasseSoignant, $nullValue ,$addressSoignat);

        mysqli_stmt_execute($stmt);

        echo "Record inserted successfully.";

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the SQL statement: " . mysqli_error($conn); // Modify $conn to your actual database connection variable
    }

    mysqli_close($conn); // Modify $conn to your actual database connection variable
} else {
    echo "This script should only be accessed via a POST request.";
}
?>