<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn = mysqli_connect("localhost", "root", "", "login_project");

    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
    mysqli_query($conn, $query);

    echo "<script>alert('Akun anda berhasil dibuat!')</script>";
    echo "<script>window.location.href='login.php'</script>";
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">

    <title>Register Page</title>
</head>

<body>
    <div class="login-box">
        <form action="" method="post">
            <h2>Register</h2>
            <div class="user-box">
                <input type="email" id="email" name="email" required>
                <label for="email">Email:</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required>
                <label for="password">Password:</label>
            </div>
            <button type="submit" name="submit" value="Register">Register</button>
            <div class="user-box" style="text-align: center;"><br>
                <span style="color: white;">Registered user?</span>
                <a href="login.php" style="color: #0086df; text-decoration: none;">Sign in here.</a>
            </div>

        </form>
    </div>

</html>