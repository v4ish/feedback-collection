<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(38,38,38);
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 500px;
            margin: 100px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            margin-top: 20px;
        }

        label{
            font-weight: bold;
        }

        .btn {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }


    </style>

</head>
<body>
    <center>
    <div class="container">
    <h1>Feedback Form</h1>
    <form action="process_ifeedback.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="feedback">Feedback:</label><br>
        <textarea id="feedback" name="feedback" rows="4" required></textarea><br><br>

        <input type="submit" value="Submit" class="btn">
    </form>
    </div>
    </center>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $feedback = $_POST["feedback"];

//     $file = fopen("feedback.txt", "a"); 
//     fwrite($file, "$name\n");
//     fwrite($file, "$email\n");
//     fwrite($file, "$feedback\n\n");
//     fclose($file);

    
//     header("Location: thank_you.php");
//     exit();
// }
?> 
</body>
</html>
