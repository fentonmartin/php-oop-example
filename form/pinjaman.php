<?php
    include '../app.php';
    include '../obj/pinjaman.php'; ?>

<html>
    <body>
        <form method="POST" action="">
        <table width="20%" align="center" cellpadding="3">

        <tr>
        <th colspan="2"> Form Pinjaman </th>
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
    $Pinjaman = new Pinjaman();

    // Set Data Object
    $Pinjaman->setId($_POST['id']);
    $Pinjaman->setDate($_POST['date']);
    $Pinjaman->setJumlah($_POST['jumlah']);
    $Pinjaman->setSaldo($_POST['saldo']);

    // Get Data Object and Set on Session
    array_push($_SESSION['id_pinjaman'], $Pinjaman->getId());
    array_push($_SESSION['date_pinjaman'], $Pinjaman->getDate());
    array_push($_SESSION['jumlah_pinjaman'], $Pinjaman->getJumlah());
    array_push($_SESSION['saldo_pinjaman'], $Pinjaman->getSaldo());

    // Notifikasi
    echo "<br>";
    echo "Success, Data " .$Pinjaman->getId()." have been recorded!";
}
?>