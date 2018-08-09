<html>
    <body>
        <form method="POST" action="">
        <p align="center"> Form Account </p>

        id <input type="text" name="id"/>
        nama <input type="text" name="nama"/>
        alamat <input type="text" name="alamat"/>
        balance <input type= "text" name="balance"/> 
        id bank <input type= "text" name="idbank"/> 
        
        <input type="submit" name="submit" value="kirim"/>

        </form>
    <body/>
</html>

<?php
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $balance = $_POST['balance'];
    $idbank = $_POST['idbank'];


    echo "<br>";
    echo "id = " .$id ."<br>";
    echo "nama = " .$nama ."<br>";
    echo "alamat = " .$alamat ."<br>";
    echo "balance = " .$balance ."<br>";
    echo "id bank = " .$idbank ."<br>";  
} 
?>