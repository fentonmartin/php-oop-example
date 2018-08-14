<?php include '../app.php'; ?>
<html>
  <body>
  </br>
    <table width="50%" align="center" border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Jumlah</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <?php for ($i=0; $i < count($_SESSION['id_pinjaman']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['id_pinjaman'][$i];?></td>
          <td><?php echo $_SESSION['date_pinjaman'][$i];?></td>
          <td><?php echo $_SESSION['jumlah_pinjaman'][$i];?></td>
          <td><?php echo $_SESSION['saldo_pinjaman'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
