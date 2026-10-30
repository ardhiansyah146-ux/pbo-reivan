<?php

require('./PropertyConstant.php')

use Pbo\Marketplace\Produk;

//object
$produk = new
 Produk('P0001','Laptop',10000000,5);


//hasil
echo "Produk; ". $produk->nama;
echo "<br/>";

echo "harga; ". $produk->harga;
echo "<br/>";

echo "stok; ". $produk->stok;
echo "<br/>";

echo "pajak; ". $produk->pajak(). "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.". $produk->total();