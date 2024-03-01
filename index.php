<?php
// Contoh implementasi Inheritance
class Kendaraan {
    protected $jenis;

    public function __construct($jenis) {
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Ini adalah kendaraan $this->jenis";
    }
}

class Mobil extends Kendaraan {
    protected $merk;

    public function __construct($jenis, $merk) {
        parent::__construct($jenis);
        $this->merk = $merk;
    }

    public function getInfo() {
        return parent::getInfo() . " merk $this->merk";
    }
}

// Contoh implementasi Polymorphism
function infoKendaraan(Kendaraan $kendaraan) {
    echo $kendaraan->getInfo() . "\n";
}

$mobil = new Mobil("mobil", "Toyota");
infoKendaraan($mobil); // Output: Ini adalah kendaraan mobil merk Toyota

// Contoh implementasi Encapsulation
class Manusia {
    private $nama;
    private $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }
}

$manusia = new Manusia("ananda fauziah", 21);
echo "Nama: " . $manusia->getNama() . ", Umur: " . $manusia->getUmur() . "\n"; // Output: Nama: ananda fauziah, Umur: 21
$manusia->setNama("Ananda Fauziah");
$manusia->setUmur(21);
echo "Nama: " . $manusia->getNama() . ", Umur: " . $manusia->getUmur() . "\n"; // Output: Nama: Ananda Fauziah, Umur: 21
?>
