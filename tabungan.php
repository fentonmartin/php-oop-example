<?php

//buat class pinjaman
// - id
// - date
// - jumlah
// - saldo


    class Tabungan {
        var $id;
        var $date;
        var $jumlah;
        var $saldo;

        function setId($par){
            $this->id = $par;
        }

        function getId(){
            return $this->id;
        }

        function setDate($par){
            $this->date = $par;
        }

        function getDate(){
            return $this->date;
        }

        function setJumlah($par){
            $this->jumlah = $par;
        }

        function getJumlah(){
            return $this->jumlah;
        }

        function setSaldo($par){
            $this->saldo = $par;
        }

        function getSaldo(){
            return $this->saldo;
        }
    }