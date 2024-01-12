<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($email) || empty($password)) {
        header("Location: login.html?error=empty_fields");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.html?error=invalid_email");
        exit();
    }

    // Hash the provided password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $sql_select = "SELECT Mot_de_passe_soignant FROM soignants WHERE Email_malade = ?";
    $stmt = mysqli_prepare($conn, $sql_select);

    // Check if the prepare statement succeeded
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $hashed_password_from_db);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        // Verify the hashed password
        if (password_verify($password, $hashed_password_from_db)) {
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.html?error=invalid_login");
            exit();
        }
    } else {
        // Handle the prepare statement error
        echo "Prepare statement error: " . mysqli_error($conn);
        exit();
    }
} else {
    echo "This script should only be accessed via a POST request.";
}
?>
