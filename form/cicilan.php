<html>
    <body>
        <form method="POST" action="">
        <table width="20%" align="center" cellpadding="3">

        <tr>
        <th colspan="2"> Form Cicilan </th>
        </tr>
        
        <tr>
        <td> id </td> 
        <td>: <input type="text" name="id"/></td>
        </tr>

        <tr>
        <td> date </td> 
        <td>: <input type="text" name="date"/></td>
        </tr>
        
        <tr>
        <td> jumlah </td>
        <td>: <input type="text" name="jumlah"/></td>
        </tr>

        <tr>
        <td> saldo </td>
        <td>: <input type="text" name="saldo"/></td>
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