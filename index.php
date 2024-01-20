<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Рад приветствовать тебя на сайте, {$_SESSION['username']}!";
    echo '<br>';
    echo '<a href="/final_php_neto/exit.php">Выйти</a>';
} else {
    include('form.html');
}
echo '<br>';
include('author.html');
