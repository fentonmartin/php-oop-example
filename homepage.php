<?php
    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "Coba login lagi ";
        echo "<a href='http://localhost/php-oop-example/login.php'>disini</a>";
    }
    else {
        // Checking time when home page starts
        $now = time();

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='http://localhost/php-oop-example/login.php'>Login disini</a>";
        }
        else {
?>
            <html>
                Welcome user
                <?php
                    echo " ".$_SESSION['luser'];
                ?>
            </br>
            </br>
                <?php
                    echo "<a href='http://localhost/php-oop-example/logout.php'>Log out</a>";
                ?>
            </html>
<?php
        }
    }
?>