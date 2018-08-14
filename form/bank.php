<?php
    include '../app.php';
    include '../obj/bank.php'; ?>

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

 // Inisiasi Object
    $Bank = new Bank();

    // Set Data Object
    $Bank->setId($_POST['id']);
    $Bank->setName($_POST['nama']);
    $Bank->setAddress($_POST['alamat']);
    $Bank->setPhone($_POST['telepon']);

    // Get Data Object and Set on Session
    array_push($_SESSION['id_bank'], $Bank->getId());
    array_push($_SESSION['name_bank'], $Bank->getName());
    array_push($_SESSION['address_bank'], $Bank->getAddress());
    array_push($_SESSION['phone_bank'], $Bank->getPhone());

    // Notifikasi
    echo "<br>";
    echo "Success, Data " .$Bank->getName()." have been recorded!";
}
?>