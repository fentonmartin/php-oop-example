<?php include '../app.php'; ?>
<html>
  <body>
  </br>
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
  </body>
</html>
