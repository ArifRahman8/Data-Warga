<?php
class Warga{
    //variabel global
    var $nama;
    var $alamat;
    //tahap 1
    public function personAwal(){
        echo $nama="Adi Suradi";
        echo "<br>";
        echo $alamat="bogor";
    }
    //tahap 2
    public function person(){
        echo $nama_=$this->nama;
        echo "<br>";
        echo $alamat=$this->alamat;
    }
    public function setPerson(){
        //menggunakan variabel global
        $this->nama="Nama 1";
        echo "<br>";
        $this->alamat="Alamat 1";
    }
    public function person3($nama,$alamat){
        echo $nama=$nama;
        echo "<br>";
        echo $alamat=$alamat;
    }
}
?>