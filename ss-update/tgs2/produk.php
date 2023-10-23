<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Xiao Yen";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "EMEL";
// $produk2->tambahProperty = "sjndwwj";
// var_dump($produk2);

$produk1 = new Produk("BTTH", "MANUSIA", "ORANG", 99999);

$produk2 = new Produk(" EMEL", "Manusialah", "sama aja", 8000000);

echo "Film : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();