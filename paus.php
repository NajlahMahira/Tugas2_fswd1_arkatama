<?php

    require_once 'animal.php';

    class Cat extends Animal{

        public function __construct($nama, $jenis)
        {
            $this->nama = $nama;
            $this->jenis = $jenis;

            
        }

        public function getInfo(){
           
            return "Hewan ini adalah : ".$this->nama . " Jenis: ".$this->jenis . ". Paus ini adalah hewan jenis omnivora yang tinggal dilaut biru dan termasuk mamalia yang lucu dan menggemaskan" . "<br>" ;
    
        }
    
        
    }





?>
