<?php
  session_start();

  // Account
  if (!isset($_SESSION['id_account'])) {
    $_SESSION['id_account'] = array();
    $_SESSION['name_account'] = array();
    $_SESSION['address_account'] = array();
    $_SESSION['balance_account'] = array();
    $_SESSION['id_bank_account'] = array();
  }
  // Bank
  if (!isset($_SESSION['id_bank'])) {
    $_SESSION['id_bank'] = array();
    $_SESSION['name_bank'] = array();
    $_SESSION['address_bank'] = array();
    $_SESSION['phone_bank'] = array();
  }
  // Cicilan
  if (!isset($_SESSION['id_cicilan'])) {
    $_SESSION['id_cicilan'] = array();
    $_SESSION['date_cicilan'] = array();
    $_SESSION['jumlah_cicilan'] = array();
    $_SESSION['saldo_cicilan'] = array();
  }
  // Pinjaman
  if (!isset($_SESSION['id_pinjaman'])) {
    $_SESSION['id_pinjaman'] = array();
    $_SESSION['date_pinjaman'] = array();
    $_SESSION['jumlah_pinjaman'] = array();
    $_SESSION['saldo_pinjaman'] = array();
  }
  // Tabungan
  if (!isset($_SESSION['id_tabungan'])) {
    $_SESSION['id_tabungan'] = array();
    $_SESSION['date_tabungan'] = array();
    $_SESSION['jumlah_tabungan'] = array();
    $_SESSION['saldo_tabungan'] = array();
  }
  
?>