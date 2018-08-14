<?php
    session_start();
?>

<html>
	<body>
        </br>
        
        <p align='center'> <font size='6pt'>Login</font> </p>
        <p align='center'> <font color='grey' size='3pt'>(Input username '1' and password '1' to continue)</font> </p></td>
    
		<form method="post">
            <table width="20%" align="center" cellpadding="3">
                <tr>
        	        <td>Username</td>
        	        <td>
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>    
        	        <td>Password</td>
        	        <td>
                        <input type="password" name="pwd">
                    </td>
                </tr>
                <tr>
        			<td colspan="2" align="center">
                        <input type="submit" value="Sign In" name="submit">
                    </td>
                </tr>
            </table>
		</form>
	</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $v1 = "1";
        $v2 = "1";

        $v3 = $_POST['text'];
        $v4 = $_POST['pwd'];

        if ($v1 == $v3 && $v2 == $v4) {
            $_SESSION['luser'] = $v1;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (999999999999999999999);
            header('Location: http://localhost/php-oop-example/homepage.php');
        } else {
            echo "<p align='center'> <font color='red' size='3pt'>Username or password is incorrect! Try again!</font> </p>";
        }
    }
?>