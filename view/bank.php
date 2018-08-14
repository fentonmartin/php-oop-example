<?php include '../app.php'; ?>
<html>
  <body>
  </br>
    <div align=center>
      <title>Bank Page</title>
      <p>
        <font size='4pt'>List Bank</font>
      </p>
      <table width="50%" align="center" border="1">
        <thead>
          <tr>
            <th>ID Bank</th>
            <th>Nama Bank</th>
            <th>Alamat Bank</th>
            <th>Telepon Bank</th>
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
      </br>  
      <form action="http://localhost/php-oop-example/form/bank.php">
        <input align="right" type="submit" value="Add new record" />
      </form>
    </div>
  </body>
</html>
