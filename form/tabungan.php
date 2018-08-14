<?php
    include '../app.php';
    include '../obj/tabungan.php'; ?>

<html>
    <body>
        <form method="POST" action="">
        <table width="20%" align="center" cellpadding="3">

        <tr>
        <th colspan="2"> Form Tabungan </th>
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

 // Inisiasi Object
    $Tabungan = new Tabungan();

    // Set Data Object
    $Tabungan->setId($_POST['id']);
    $Tabungan->setDate($_POST['date']);
    $Tabungan->setJumlah($_POST['jumlah']);
    $Tabungan->setSaldo($_POST['saldo']);

    // Get Data Object and Set on Session
    array_push($_SESSION['id_tabungan'], $Tabungan->getId());
    array_push($_SESSION['date_tabungan'], $Tabungan->getDate());
    array_push($_SESSION['jumlah_tabungan'], $Tabungan->getJumlah());
    array_push($_SESSION['saldo_tabungan'], $Tabungan->getSaldo());

    // Notifikasi
    echo "<br>";
    echo "Success, Data " .$Tabungan->getId()." have been recorded!";
}
?>