<?php
session_start();
session_destroy();
header('Location: /final_php_neto/index.php');
