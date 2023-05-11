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

                header('Location: index.php'); // redirect ke file index.php
                exit(); // exit script setelah redirect
            } else {
                $error = "Invalid password";
            }
        } else {
            $error = "Invalid email/username";
        }
    }
