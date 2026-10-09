<?php

class Produk {

    //property
    public string $kode;
    public string $name;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;
}


//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11%
$jumlahPajak = $produk->harga * Produk::PAJAK; //1.100.000

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk; ". $produk->nama;
echo "<br/>";

echo "harga; ". $produk->harga;
echo "<br/>";

echo "stok; ". $produk->stok;
echo "<br/>";

echo "pajak; ". $pajak. "%";
echo "<br/>";

echo "total harga setelah pajak: Rp.". $total;