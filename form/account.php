<html>
    <body>
        <form method="POST" action="">
        <table width="20%" align="center" cellpadding="3">

        <tr>
        <th colspan="2"> Form Account </th>
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
        <td> balance </td>
        <td>: <input type="text" name="balance"/></td>
        </tr>

        <tr>
        <td> id bank </td>
        <td>: <input type="text" name="idbank"/></td>
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