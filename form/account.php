<?php
    include '../app.php';
    include '../obj/account.php'; ?>

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

    // Inisiasi Object
    $Account = new Account();

    // Set Data Object
    $Account->setId($_POST['id']);
    $Account->setName($_POST['nama']);
    $Account->setAddress($_POST['alamat']);
    $Account->setBalance($_POST['balance']);
    $Account->setIdBank($_POST['idbank']);

    // Get Data Object and Set on Session
    array_push($_SESSION['id_account'], $Account->getId());
    array_push($_SESSION['name_account'], $Account->getName());
    array_push($_SESSION['address_account'], $Account->getAddress());
    array_push($_SESSION['balance_account'], $Account->getBalance());
    array_push($_SESSION['id_bank_account'], $Account->getIdBank());

    // Notifikasi
    echo "<br>";
    echo "Success, Data " .$Account->getName()." have been recorded!";
}
?>