<?php
class Manusia{
    public function berjalan() {
        echo 'mati';
    }
}
$Eliff = new Manusia;
?>
<p>Saya Eliff, Saya dapat <?php echo $Eliff->berjalan() ?>.</p>
<br>
<hr>
<?php
