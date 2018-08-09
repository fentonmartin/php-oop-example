<html>
    <body>
        <form method="POST" action="">
        <p align="center"> Form Bank </p>

        id <input type="text" name="id"/>
        nama <input type="text" name="nama"/>
        alamat <input type="text" name="alamat"/>
        telepon <input type= "text" name="telepon"/> 

        <input type="submit" name="submit" value="kirim"/>

        </form>
    <body/>
</html>


<?php
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    echo "<br>";
    echo "id = " .$id ."<br>";
    echo "nama = " .$nama ."<br>";
    echo "alamat = " .$alamat ."<br>";
    echo "telepon = " .$telepon ."<br>";
} 
?>