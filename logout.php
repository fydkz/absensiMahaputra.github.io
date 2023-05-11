<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "login_project");

$query = "DELETE FROM sessions WHERE user_id='$_SESSION[user_id]' AND session_id='$_SESSION[session_id]'";
mysqli_query($conn, $query);

session_unset();
session_destroy();

header('Location: login.php');
