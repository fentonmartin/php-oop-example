<?php
    include 'app.php';

    // Disable error reporting
    error_reporting(E_ERROR | E_PARSE);

    // User check
    if (!isset($_SESSION['luser'])) {
        echo "</br><p align='center'> <font size='6pt'>Please login <a href='http://localhost/php-oop-example/login.php'>here</a></font> </p>";
    }
    else {
        // Checking time when home page starts
        $now = time();

        // Checking session with time
        if ($now > $_SESSION['expire']) {
            // Remove session
            session_destroy();
            echo "</br><p align='center'> <font size='6pt'>Your session has expired! <a href='http://localhost/php-oop-example/login.php'>Login here</a></font> </p>";
        }
        // Show homepage
        else {
            // Show homepage message
            echo "</br><p align='center'> <font size='6pt'>Welcome, ".$_SESSION['luser'].". <a href='http://localhost/php-oop-example/logout.php'>Log out</a></font> </p>";

            // Show account table
            include 'view/account.php';
            include 'view/bank.php';
            include 'view/cicilan.php';
            include 'view/pinjaman.php';
            include 'view/tabungan.php';
        }
    }
?>