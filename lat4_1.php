<?php 

    // class Mobil
    class Mobil{
        public $nama;
        public $merk;

        function getInfo(){
            echo "Nama Mobil : ". $this->nama."</br>";
            echo "Merk       : ". $this->merk."</br>";
        }

        function __get($a)
        {
            $this->a=$a;
            return true;
        }

    }

    // bagian main
    $ferari = new Mobil();
    $ferari->nama="xxx";
    $ferari->merk="aaa";
    $ferari->getInfo();

?>