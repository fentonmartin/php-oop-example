<?php

// Buat class account
// - id
// - nama
// - alamat
// - balance
// - id bank
// - function: print balance

   class Account {
      var $id;
      var $name;
      var $address;
      var $balance;
      var $id_bank;

      function setId($par){
         $this->id = $par;
      }
      
      function getId(){
         return $this->id;
      }
      
      function setName($par){
         $this->name = $par;
      }
      
      function getName(){
         return $this->name;
      }
      
      function setAddress($par){
         $this->address = $par;
      }
      
      function getAddress(){
         return $this->address;
      }
      
      function setBalance($par){
         $this->balance = $par;
      }
      
      function getBalance(){
         return $this->balance;
      }
      
      function setIdBank($par){
         $this->id_bank = $par;
      }
      
      function getIdBank(){
         return $this->id_bank;
      }
      
      function print_balance(){
         echo getBalance();
      }
   }
?>