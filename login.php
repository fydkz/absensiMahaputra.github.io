<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "login_project");

    $query = "SELECT * FROM users WHERE email='$email' OR username='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $session_id = session_id();
            $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
            $query = "INSERT INTO sessions (user_id, session_id, expiry) VALUES ('$user[id]', '$session_id', '$expiry')";
            mysqli_query($conn, $query);

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['session_id'] = $session_id;

            header('Location: index.php');
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid email/username";
    }
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">

    <title>Login Admin</title>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="" method="post">
            <?php if (isset($error)) { ?>
                <div style="background-color: red; padding: 10px; display: flex; align-items: center;">
                    <img src="path/to/danger_logo.png" alt="Danger Logo" style="width: 20px; height: 20px; margin-right: 10px;">
                    <p style="color: white;"><?php echo $error; ?></p>
                </div>
            <?php } ?>
            <div class="user-box">
                <input type="text" name="email" id="email" required>
                <label for="email">Email:</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" required>
                <label for="password">Password:</label>
            </div>
            <button type="submit" name="login">
                Login </button>
            <div class="user-box" style="text-align: center;"><br>
                <span style="color: white;">Need to register?</span>
                <a href="register.php" style="color: #0086df; text-decoration: none;">Sign Up here.</a>
            </div>

        </form>
    </div>

</body>

</html>