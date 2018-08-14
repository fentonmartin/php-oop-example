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
          <th>Telepon</th>
        </tr>
      </thead>
      <?php for ($i=0; $i < count($_SESSION['id_bank']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['id_bank'][$i];?></td>
          <td><?php echo $_SESSION['name_bank'][$i];?></td>
          <td><?php echo $_SESSION['address_bank'][$i];?></td>
          <td><?php echo $_SESSION['phone_bank'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
