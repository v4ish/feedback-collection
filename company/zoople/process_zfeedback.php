<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Save feedback to a file (you can modify this to save to a database)
    $file = fopen("zoople.txt", "a"); // Open file in append mode
    if ($file) {
        fwrite($file, "Name: $name\n");
        fwrite($file, "Email: $email\n");
        fwrite($file, "Feedback: $feedback\n\n");
        fclose($file);
        // Redirect to a thank you page or display a thank you message
        header("Location: ../../thank_you.php");
        exit();
    } else {
        echo "Failed to open file.";
    }
} else {
    echo "Invalid request method.";
}
?>