<?php

    require_once 'animal.php';

    class Cat extends Animal{

        public function __construct($nama, $jenis)
        {
            $this->nama = $nama;
            $this->jenis = $jenis;

            
        }

        public function getInfo(){
           
            return "Hewan ini adalah : ".$this->nama . " Jenis: ".$this->jenis . ". kucing.Hewan ini adalah hewan jenis karnivora yang sering dipelihara banyak orang karena bulunya yang lembut dan menggemaskan." . "<br>" ;
    
        }
    
        
    }





?>
