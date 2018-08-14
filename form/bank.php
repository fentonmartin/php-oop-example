<html>
    <body>
        <form method="POST" action="">
        <table width="20%" align="center" cellpadding="3">

        <tr>
        <th colspan="2"> Form Bank </th>
        </tr>
        
        <tr>
        <td> id </td> 
        <td>: <input type="text" name="id"/></td>
        </tr>

        <tr>
        <td> nama </td> 
        <td>: <input type="text" name="nama"/></td>
        </tr>
        
        <tr>
        <td> alamat </td>
        <td>: <input type="text" name="alamat"/></td>
        </tr>

        <tr>
        <td> telepon </td>
        <td>: <input type="text" name="telepon"/></td>
        </tr>
        
        <tr>
        <th colspan="2"> <input type="submit" name="submit" value="kirim"/>
        </th>
        </tr>

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