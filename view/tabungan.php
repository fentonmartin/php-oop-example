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
      <?php for ($i=0; $i < count($_SESSION['id_tabungan']); $i++) {?>
        <tr>
          <td><?php echo $_SESSION['id_tabungan'][$i];?></td>
          <td><?php echo $_SESSION['date_tabungan'][$i];?></td>
          <td><?php echo $_SESSION['jumlah_tabungan'][$i];?></td>
          <td><?php echo $_SESSION['saldo_tabungan'][$i];?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
