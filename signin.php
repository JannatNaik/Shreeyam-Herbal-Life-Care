<!DOCTYPE html>
<html>
<head>
    <title>Shreeyam Herbal Life Care Sign in Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    </style>
</head>
<body>
    

</body>
</html>
<?php
    $nameErr = $emailErr  = "";
    $name = $email = "";
// Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $uid = $_POST["uid"];
    // $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];

    // You should perform proper validation and authentication here
    // For simplicity, let's assume a valid username and password
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $username = ($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
    //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //  $emailErr = "Invalid email format";
    //}
    $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
    if (!preg_match($pattern, $email)) {
        $emailErr = "Invalid email format";
    }
  }
    

    $validUsername = "example_user";
    $validPassword = "example_password";

    // Check if the provided credentials are valid
    if ($username == $validUsername && $password == $validPassword) {
        // Redirect to a dashboard or home page upon successful login
        header("Location: dashboard.php");
        exit();
    } else {
        // Display an error message for invalid credentials
        echo "<p style='color: red;'>Invalid username or password. Please try again.</p>";
    }
}
?>