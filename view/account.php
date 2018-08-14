<?php include '../app.php'; ?>
<html>
  <body>
    </br>
    <div align=center>
      <title>Account Page</title>
      <p>
        <font size='4pt'>Account</font>
      </p>
      <table width="50%" align="center" border="1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Saldo</th>
            <th>Kode Bank</th>
          </tr>
        </thead>
        <?php for ($i=0; $i < count($_SESSION['id_account']); $i++) {?>
          <tr>
            <td><?php echo $_SESSION['id_account'][$i];?></td>
            <td><?php echo $_SESSION['name_account'][$i];?></td>
            <td><?php echo $_SESSION['address_account'][$i];?></td>
            <td><?php echo $_SESSION['balance_account'][$i];?></td>
            <td><?php echo $_SESSION['id_bank_account'][$i];?></td>
          </tr>
        <?php } ?>
      </table>
      </br>  
      <form action="http://localhost/php-oop-example/form/account.php">
        <input align="right" type="submit" value="Add new record" />
      </form>
    </div>
    </br>
  </body>
</html>
