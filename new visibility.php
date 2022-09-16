<?php
class Visibility{
    public $public = 'public';
    protected $protected = 'Protected';
    private $private = 'private';
function CetakProperti(){
    echo "Akses dari dalam class <br>";
    echo "Public : ".$this->public."<br>";
    echo "Protected : ".$this->public."<br>";
    echo "Private : ".$this->private."<br>";
}
}
$obj = new Visibility();
$obj->CetakProperti();
echo "<br> Pengaksesan dari luar class <br>";
echo "Public : ".$obj->public. "<br>";
echo "Protected : ".$obj->protected."<br>";
echo "Private : ".$obj->private."<br>";
