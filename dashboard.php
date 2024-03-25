<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="./style.css" /> -->

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(38, 38, 38);
        margin: 0;
        padding: 0;
    }

    h2 {
        color: white;
    }

    .card-deck {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        /* gap: 20px; */
        margin-left: 137px;
        margin-right: auto;
    }

    .card {
        width: 200px;
        height: 320px;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        /*Adjust image height to fit within card  */
        margin-left: 0px;
        margin-right: 2px;
        /* object-fit: cover; */
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;

    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .text-muted {
        color: #777;
    }

    .card-footer {
        margin-top: auto;
        /* Push the footer to the bottom of the card */
    }

    .btn-info {
        width: 100%;
        /* Make the button fill the entire footer */
    }
    </style>

    <title>Dashboard</title>
</head>

<body>
    <br><br>
    <center>
        <h2><b>SELECT THE COMPANY YOU WANT TO GIVE FEEDBACK TO</b></h2>
    </center>
    <br><br>
    <br>
    <div class="card-deck">
        <!--------------------infosys---------------->
        <div class="card">
            <img class="card-img-top" src="company/infosys/infosys1.png" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Infosys</h5>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to additional content.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-info" onclick="location.href = 'company/infosys/ifeedback.php';">
                    Send Feedback
                </button>
            </div>
        </div>
        <!--------------------Keltron---------------->
        <div class="card">
            <img class="card-img-top" src="company/keltron/kelt.png" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Keltron</h5>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to
                    additional content.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-info" onclick="location.href = 'company/keltron/kfeedback.php';">
                    Send Feedback
                </button>
            </div>
        </div>
        <!--------------------Wipro---------------->
        <div class="card">
            <img class="card-img-top" src="company/wipro/wipr.jpg" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Wipro</h5>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to additional content.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-info" onclick="location.href = 'company/wipro/feedback.php';">
                    Send Feedback
                </button>
            </div>
        </div>
        <!--------------------Zoople---------------->
        <div class="card">
            <img class="card-img-top" src="company/zoople/zoople.svg" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Zoople</h5>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to additional content.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-info" onclick="location.href = 'company/zoople/zfeedback.php';">
                    Send Feedback
                </button>
            </div>
        </div>
    </div>
</body>

</html>