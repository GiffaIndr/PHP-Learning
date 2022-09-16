<?php

use User as GlobalUser;

Interface Hewan {
    public function Makan();
    public function Bergerak();
    public function Beranak();
}

class Burung Implements Hewan {
    public function Makan() {
        return "Burung makan biji-bijian<br/>";
    }
    public function Bergerak() {
        return "Burung bergerak dengan berjalan, terbang dan melompat<br/>";
    }
    public function Beranak() {
        return "Burung beranak dengan bertelur<br/>";
    }
}

Class Kambing Implements Hewan {
    public function Makan() {
        return "Kambing makan rumput<br/>";
    }
    public function Bergerak() {
        return "Kambing bergerak dengan berjalan dan berlari<br/>";
    }
    public function Beranak() {
        return "Kambing beranak dengan melahirkan<br/>";
    }
}

$burung = new Burung;
$kambing = new Kambing;

echo "<b>Perilaku Burung : <b/><br/>";
echo $burung->Makan();
echo $burung->Bergerak();
echo $burung->Beranak();

echo "<br/>";
echo "<b>Perilaku Kambing : <b/><br/>";
echo $kambing->Makan();
echo $kambing->Bergerak();
echo $kambing->Beranak();

echo "<hr>";
echo "Membuat interface Tanah <br><br>";
//////////////polymorphism menggunakan abstract class dan interface//////////////////////////////////////

////////membuat interface Tanah////////
interface Tanah
{
    public function hitungLuas();
}

//////membuat abstract class Bibit///////
abstract class Bibit
{
    abstract public function ditanami();
}

////extends Bibit dan implements Tanah//////////
class Lingkaran extends Bibit implements Tanah
{
    private $jariJari;
    private $pi = 3.14;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    ///////implements method dari interface tanah
    public function hitungLuas() {
        return $this->jariJari * $this->jariJari * $this->pi;
    }

    /////tanah ditanami Kopi
    /////extneds method dari abstract class Bibit
    public function ditanami() {
        return "ditanami Kopi";
    }
}

class PersegiPanjang extends Bibit implements Tanah {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    //menghitung luas tanah berbentuk persegi panjang
    /////implements method dari interface tanah
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    ///tanah ditanami Padi
    /////extneds method dari abstract class Bibit
    public function ditanami () {
        return "ditanami Padi";
    }
}

$tanahAgus = new Lingkaran(3);
$tanahChandra = new PersegiPanjang(3,4);

echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " m2 \n";
echo $tanahAgus->ditanami() . "\n \n";

echo "Tanah Chandra seluas " . $tanahChandra->hitungLuas() . "m2 \n";
echo $tanahChandra->ditanami() . "\n";

echo "<hr>";
echo "Abstract Class <br> <br>";

abstract class User
{
    abstract protected function showName();

    ////memiliki required argument: $greeting
    abstract public function showGreeting($greeting);

    ////regular method
    public function showBio(){
        echo "This is my Bio fr <br/>";
        echo "My name is lord " . $this->showName();
    }
}
 class Admin extends User
 {
     public function showName(){
         return "Giffa built diff";
     }

     public function showGreeting($greeting, $address = 'Banjar'){
         return $greeting . ", my name is " . $this->showName() . " from " . $address;
     }

     ///bukan berasal dari abstract method
     public function showBio(){
         echo "This is Bio from" . $this->showName();
     } 
 }
 
 class Editor extends User
{
    public function showName(){
        return "Acep Editor";
    }

    public function showGreeting($greeting, $address = 'Banjar'){
        return $greeting . ", my name is " . $this->showName() . " from " . $address;
    }

    // bukan berasal dari abstract method
    public function showBio(){
        echo "This is Bio from " . $this->showName();
    }
}

 class Reporter extends User
 {
     public function showName(){
         return "Novica Reporter";
     }
     public function showGreeting($greeting, $address = 'Banjar'){
        return $greeting . ", my name is " . $this->showName() . " from " . $address;
     }
 }

 $admin = new Admin;
 $editor = new Editor;
 $reporter = new Reporter;

 echo $admin->showGreeting("Good morning", "Boston (AS)") . "<br/>";
 echo $admin->showBio() . "<br/><br/>";
 
 echo $editor->showGreeting("Good night", "Los Santos") . "<br/>";
 echo $editor->showBio() . "<br/><br/>";

 echo $reporter->showGreeting("Good evening", "Kyoto") . "<br/>";
 echo $reporter->showBio();
?>
