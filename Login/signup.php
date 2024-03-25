<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
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
    .input-control {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
      font-weight: bold;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .error {
      color: #ff0000;
      font-size: 12px;
      margin-top: 5px;
    }
    button[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button[type="submit"]:hover {
      background-color: #0056b3;
    }
    p {
      text-align: center;
      margin-top: 20px;
    }
    a {
      color: #007bff;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="form" action="user_signup.php" method="POST" onsubmit="return validateForm()">
      <h1>Sign Up</h1>
      <div class="input-control">
        <label for="Email">Email:</label>
        <input id="email" name="email" type="text" required>
        <div class="error" id="emailError"></div>
      </div>
      <div class="input-control">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>
        <div class="error" id="passwordError"></div>
      </div>
      <div class="input-control">
        <label for="confirm_password">Confirm Password</label>
        <input id="cpassword" name="cpassword" type="password" required>
        <div class="error" id="cpasswordError"></div>
      </div>
      <button type="submit">Sign Up</button>
      <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
  </div>

  <script>
    function validateForm() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var cpassword = document.getElementById("cpassword").value;
      var emailError = document.getElementById("emailError");
      var passwordError = document.getElementById("passwordError");
      var cpasswordError = document.getElementById("cpasswordError");
      var isValid = true;

      // Email validation
      if (!validateEmail(email)) {
        emailError.innerText = "Invalid email address";
        isValid = false;
      } else {
        emailError.innerText = "";
      }

      // Password validation
      if (password.length < 8) {
        passwordError.innerText = "Password must be at least 8 characters long";
        isValid = false;
      } else {
        passwordError.innerText = "";
      }

      // Confirm password validation
      if (password !== cpassword) {
        cpasswordError.innerText = "Passwords do not match";
        isValid = false;
      } else {
        cpasswordError.innerText = "";
      }

      return isValid;
    }

    // Function to validate email format
    function validateEmail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }
  </script>
</body>
</html>
