<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shreeyam Herbal Life Care Sign in Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="uid">User ID:</label>
            <input type="text" id="uid" name="uid" required><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <label for="contact">Contact No.:</label>
            <input type="text" id="contact" name="contact" required><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>