<?php
include("inherit1.php");
////////Pewarisan tanpa perubahan//////
class OrangSunda extends Orang{
}
/////Pewarisan dengan meng-override function Ucap Salam//////4
///////dan Penambah Method/////////////////

class OrangInggris extends Orang{
    protected $asal="Wakanda"; /// Penambah properti baru
    function UcapSalam(){
        echo "Hello. My name is ".$this->nama."<br>";
    }
    function UcapNegara(){/// penambah method baru
    echo "I'm from ".$this->asal."<br>";
  }
}
$kabayan=new OrangSunda ("Kabayan");
$kabayan->UcapSalam();
$wiliam=new OrangInggris("Prince Giffa doc");
$wiliam->UcapSalam();
$wiliam->UcapNegara();