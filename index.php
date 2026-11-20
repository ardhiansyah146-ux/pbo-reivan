<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk();


$produk->setkode('P0001')->setNama('Laptop')->setHarga(10000000)->setStok(5);

//hasil
echo "Produk; ". $produk->getNama();
echo "<br/>";

echo "harga; ". $produk->getHarga();
echo "<br/>";

echo "stok; ". $produk->getStok();
echo "<br/>";

echo "pajak; ". $produk->pajak(). "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.". $produk->total();