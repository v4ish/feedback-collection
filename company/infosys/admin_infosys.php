<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(38,38,38);
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .feedback {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .feedback p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Feedback Details</h2>
        <?php
        // Open the file for reading
        $file = fopen("infosys.txt", "r");

        // Check if the file opened successfully
        if ($file) {
            // Initialize variables to store feedback
            $feedback1 = '';
            $feedback2 = '';
            $feedback3 = '';
            $feedback4 = '';

            // Read each line of the file until the end
            $lineCount = 0;
            while (!feof($file)) {
                // Read a line from the file
                $line = fgets($file);

                // Check if the line is not empty
                if (!empty($line)) {
                    // Increment line count
                    $lineCount++;

                    // Explode the line into an array using the "<=>" delimiter
                    $feedback = "<p> " . $line . "</p>";

                    // Assign feedback to respective variables based on line count
                    if ($lineCount <= 3) {
                        $feedback1 .= $feedback;
                    } elseif ($lineCount == 4) {
                        $feedback2 .= $feedback;
                    } elseif ($lineCount > 4 && $lineCount <= 7) {
                        $feedback3 .= $feedback;
                    } elseif ($lineCount > 7) {
                        $feedback4 .= $feedback;
                    }
                }
            }

            // Output feedback within appropriate sections
            echo '<div class="feedback">' . $feedback1 . '</div>';
            echo $feedback2;
            echo '<div class="feedback">' . $feedback3 . '</div>';
            echo '<div class="feedback">' . $feedback4 . '</div>';

            // Close the file
            fclose($file);
        } else {
            // Display an error message if the file cannot be opened
            echo "<p>Unable to open file.</p>";
        }
        ?>
    </div>
</body>
</html>
