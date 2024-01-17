<?php
require "..//model.php";
 $model = new database ("localhost", "root", "", "faq"  );
 $conn = $model->make_connection();

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $vraag = $_POST["vraag"];

    // Controleren of de ingevulde gegevens geldig zijn
    if (empty($naam) || empty($email) || empty($vraag)) {
        $messageClass = "validation-error";
        $message = "Vul alle velden in.";
    } else {
        // Query om de gegevens in de database in te voegen
        $sql = "INSERT INTO form (naam, email, vraag) VALUES ('$naam', '$email', '$vraag')";
        
        // Uitvoeren van de query
        if (mysqli_query($conn, $sql)) {
            $messageClass = "success-message";
            $message = "Je vraag is ingediend!";
            header("refresh:4;url=..//faq/faq.php");
        } else {
            $messageClass = "error-message";
            $message = "Er is een fout opgetreden: " . mysqli_error($conn);
        }
    }
}

// Sluit de databaseverbinding
mysqli_close($conn);

?>