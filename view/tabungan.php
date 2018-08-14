<?php include '../app.php'; ?>
<html>
  <body>
  </br>
    <div align=center>
      <title>Tabungan Page</title>
      <p>
        <font size='4pt'>List Tabungan</font>
      </p>
    <table width="50%" align="center" border="1">
      <thead>
        <tr>
          <th>ID Tabungan</th>
          <th>Tanggal Tabungan</th>
          <th>Jumlah Tabungan</th>
          <th>Saldo Tabungan</th>
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
