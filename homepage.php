<?php
    include 'app.php';
    
    // Disable error reporting
    error_reporting(E_ERROR | E_PARSE);

    // User check
    if (!isset($_SESSION['luser'])) {
        echo "Please login ";
        echo "<a href='http://localhost/php-oop-example/login.php'>here</a>";
    }
    else {
        // Checking time when home page starts
        $now = time();

        // Checking session with time
        if ($now > $_SESSION['expire']) {
            // Remove session
            session_destroy();
            echo "Your session has expired! <a href='http://localhost/php-oop-example/login.php'>Login here</a>";
        }
        // Show homepage
        else {
?>
            <html>
                Welcome,
                <?php
                    // Show homepage message
                    echo " ".$_SESSION['luser'].". <a href='http://localhost/php-oop-example/logout.php'>Log out</a>";
                ?>
            </br>
            <?php
                // Show account table
                include 'view/account.php';
            ?>
            </br>
            </html>
<?php
        }
    }
?>