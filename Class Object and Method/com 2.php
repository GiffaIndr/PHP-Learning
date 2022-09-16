<?php
class Manusia{
    public function membawa($var){
        echo 'membawa barang dengan tangan' .$var;
    }
}
$Eliff = new Manusia;
?>
<p>Saya Giffa, saya <?php echo $Eliff->membawa (' kanan') ?>.</p>
<p>Namun, terkadang saya juga <?php echo $Eliff->membawa (' kiri') ?>.</p>