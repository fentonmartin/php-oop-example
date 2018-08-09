<?php

// Buat class bank
// - id
// - nama
// - alamat
// - telpon
// - function: print nama bank

   class Bank {
      var $id;
      var $name;
      var $address;
      var $phone;

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
      
      function setPhone($par){
         $this->phone = $par;
      }
      
      function getPhone(){
         return $this->phone;
      }
      
      function print_bank(){
         echo getName();
      }
   }
?>