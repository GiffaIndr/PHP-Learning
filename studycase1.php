<?php
class Car{
    public $kondisi;
    public $merk;
    public $warna;
    public $nama;
    public $kecepatan;

    /////////function//////////

    public function setKondisi($kondisi){
        $this->kondisi=$kondisi;
    }
    public function setMerk($merk){
        $this->merk=$merk;
    }
    public function setWarna ($warna){
        $this->warna=$warna;
    }
    public function setNama ($nama){
        $this->nama=$nama;
    }
    public function setKecepatan ($kecepatan){
        $this->kecepatan=$kecepatan;
    }

    /////////////////getCetak////////////////////

    public function getCetak (){
        echo "Kondisi Mobil ".$this->kondisi;
        echo "<br>";
        echo "Merk Mobil : ".$this->merk;
        echo "<br>";
        echo "Nama Mobil : ".$this->nama;
        echo "<br>";
        echo "Warna Mobil : ".$this->warna;
        echo "<br>";
        echo "Kecepatan Mobil : ".$this->kecepatan;
        echo "<br>===============================<br>";
    }
}
    //////////////////function object//////////////

    $GTR = new Car();
    $GTR->setKondisi("Maju");
    $GTR->setMerk("Toyota");
    $GTR->setNama("Fortuner");
    $GTR->setWarna("Hitam");
    $GTR->setKecepatan("250");

    $Supra = new Car();
    $Supra->setKondisi("Mundur");
    $Supra->setMerk("Honda");
    $Supra->setNama("Brio");
    $Supra->setWarna("Hijau");
    $Supra->setKecepatan("100");

