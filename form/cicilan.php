<?php
    include '../app.php';
    include '../obj/cicilan.php'; ?>

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

 // Inisiasi Object
    $Cicilan = new Cicilan();

    // Set Data Object
    $Cicilan->setId($_POST['id']);
    $Cicilan->setDate($_POST['date']);
    $Cicilan->setJumlah($_POST['jumlah']);
    $Cicilan->setSaldo($_POST['saldo']);

    // Get Data Object and Set on Session
    array_push($_SESSION['id_cicilan'], $Cicilan->getId());
    array_push($_SESSION['date_cicilan'], $Cicilan->getDate());
    array_push($_SESSION['jumlah_cicilan'], $Cicilan->getJumlah());
    array_push($_SESSION['saldo_cicilan'], $Cicilan->getSaldo());

    // Notifikasi
    echo "<br>";
    echo "Success, Data " .$Cicilan->getId()." have been recorded!";
}
?>