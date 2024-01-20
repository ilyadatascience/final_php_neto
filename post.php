<?php
session_start();
$_SESSION['username'] = $_POST['username'];
header('Location: /final_php_neto/index.php');
