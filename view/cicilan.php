<?php include '../app.php'; ?>
<html>
  <body>
  </br>
    <div align=center>
      <title>Cicilan Page</title>
      <p>
        <font size='4pt'>List Cicilan</font>
      </p>
      <table width="50%" align="center" border="1">
        <thead>
          <tr>
            <th>ID Cicilan</th>
            <th>Tanggal Cicilan</th>
            <th>Jumlah Cicilan</th>
            <th>Saldo Cicilan</th>
          </tr>
        </thead>
        <?php for ($i=0; $i < count($_SESSION['id_cicilan']); $i++) {?>
          <tr>
            <td><?php echo $_SESSION['id_cicilan'][$i];?></td>
            <td><?php echo $_SESSION['date_cicilan'][$i];?></td>
            <td><?php echo $_SESSION['jumlah_cicilan'][$i];?></td>
            <td><?php echo $_SESSION['saldo_cicilan'][$i];?></td>
          </tr>
        <?php } ?>
      </table>
      </br>  
      <form action="http://localhost/php-oop-example/form/cicilan.php">
        <input align="right" type="submit" value="Add new record" />
      </form>
    </div>
  </body>
</html>
