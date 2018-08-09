<html>
    <body>
        <form method="POST" action="">
        <p align="center"> Form Cicilan </p>

        id <input type="text" name="id"/>
        date <input type="text" name="date"/>
        jumlah <input type="text" name="jumlah"/>
        saldo <input type= "text" name="saldo"/> 

        <input type="submit" name="submit" value="kirim"/>

        </form>
    <body/>
</html>

<?php
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $jumlah = $_POST['jumlah'];
    $saldo = $_POST['saldo'];

    echo "<br>";
    echo "id = " .$id ."<br>";
    echo "date = " .$date ."<br>";
    echo "jumlah = " .$jumlah ."<br>";
    echo "saldo = " .$saldo ."<br>";
} 
?>