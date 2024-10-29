<?php
class Laptop {
    var $pemilik;
    var $merk;
    var $ukuranLayar;

    function hidupkan() {
        return "Laptop dihidupkan";
    }
    function matikan() {
        return "Laptop dimatikan";
    }
    function setPemilik($nama) {
        $this->pemilik = $nama;
    }
    function getPemilik() {
        return $this->pemilik;
    }
}
$laptopAdit = new Laptop();
$laptopAdit->setPemilik("adit");
$laptopAdit->merk = "Dell";
$laptopAdit->ukuranLayar = "15 inci";

echo $laptopAdit->hidupkan();
echo $laptopAdit->getPemilik();
echo $laptopAdit->matikan();
?>
