<?php include '../app.php'; ?>
<html>
  <body>
    <table>
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
          <td><?php echo $_SESSION['nama'][$i];?></td>
          <td><?php echo $_SESSION['alamat_account'][$i];?></td>
          <td><?php echo $_SESSION['ballance'][$i];?></td>
          <td><?php echo $_SESSION['id_bank_account'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
