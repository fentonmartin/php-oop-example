<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/php-oop-example/login.php');
?>