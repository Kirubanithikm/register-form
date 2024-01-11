<?php
session_start();

if (empty($_SESSION['user_name'])) {
    header("Location: login-form.php");
    exit;
}
header("Location: welcome.php");
exit;
