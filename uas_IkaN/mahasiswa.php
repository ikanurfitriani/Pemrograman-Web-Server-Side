<?php
class mahasiswa {
    //property
    var $nama;
    var $warna;
    
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    //method manusia
    function kampus_saya(){
        return "Nama saya UTDI <br/>";
    }
    
}
class anakHewan extends hewan{
 
}
$manusia = new manusia();
echo $manusia->kampus_saya();
?>