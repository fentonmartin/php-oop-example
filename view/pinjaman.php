<?php include '../app.php'; ?>
<html>
  <body>
  </br>
    <div align=center>
      <title>Pinjaman Page</title>
      <p>
        <font size='4pt'>List Pinjaman</font>
      </p>
      <table width="50%" align="center" border="1">
        <thead>
          <tr>
            <th>ID Pinjaman</th>
            <th>Tanggal Pinjaman</th>
            <th>Jumlah Pinjaman</th>
            <th>Saldo Pinjaman</th>
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
      </br>  
      <form action="http://localhost/php-oop-example/form/account.php">
        <input align="right" type="submit" value="Add new record" />
      </form>
    </div>
  </body>
</html>
