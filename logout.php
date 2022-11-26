<?php
session_start(); // Start the session

session_unset(); // Unset all session values

session_destroy(); // Destroy the session

header('Location: login.php'); // Redirect to login page

exit();

