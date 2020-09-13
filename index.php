<?php

echo "Animal <php>";
echo " <hr>";

class kucing{
	   public $nama,  $jumlah_kaki, $bisa_terbang, $suara;
	}

	$kucing =  new kucing;
	$kucing->nama = "Azzalea";
	$kucing->jumlah_kaki = "4";
	$kucing->bisa_terbang = "tidak";
	$kucing->suara = "meooong";

	echo "kucing  <br>";
	echo "nama : $kucing->nama <br>";
	echo "jumlah kaki : $kucing->jumlah_kaki <br>";
	echo "bisa terbang : $kucing->bisa_terbang <br>";
	echo "suara : $kucing->suara <br>";
	echo "<hr>";

class anjing{
		public $nama, $jumlah_kaki, $bisa_terbang, $suara;
	}

	$anjing = new anjing;
	$anjing->nama = "Doggi";
	$anjing->jumlah_kaki = "4";
	$anjing->bisa_terbang = "tidak";
	$anjing->suara = "guk guk";


	echo "anjing  <br>";
	echo "nama : $anjing->nama <br>";
	echo "jumlah kaki : $anjing->jumlah_kaki <br>";
	echo "bisa terbang : $anjing->bisa_terbang <br>";
	echo "suara : $anjing->suara <br>";
	echo "<hr>";

	class elang{
		public $nama, $jumlah_kaki, $bisa_terbang, $suara;
	}

	$elang = new elang;
	$elang->nama = "Birdyy";
	$elang->jumlah_kaki = "2";
	$elang->bisa_terbang = "ya";
	$elang->suara = "miip";

	echo "elang  <br>";
	echo "nama : $elang->nama <br>";
	echo "jumlah kaki : $elang->jumlah_kaki <br>";
	echo "bisa terbang : $elang->bisa_terbang <br>";
	echo "suara : $elang->suara <br>";
	echo "<hr>";

	class singa{
		public $nama, $jumlah_kaki, $bisa_terbang, $suara;
	}

	$singa = new singa;
	$singa->nama = "Triggi";
	$singa->jumlah_kaki = "4";
	$singa->bisa_terbang = "tidak";
	$singa->suara = "aum aum";

	echo "singa  <br>";
	echo "nama : $singa->nama <br>";
	echo "jumlah kaki : $singa->jumlah_kaki <br>";
	echo "bisa terbang : $singa->bisa_terbang <br>";
	echo "suara : $singa->suara <br>";
	echo "<hr>";

	class ayam{
		public $nama, $jumlah_kaki, $bisa_terbang, $suara;
	}

	$ayam = new ayam;
	$ayam->nama = "Chieli";
	$ayam->jumlah_kaki = "2";
	$ayam->bisa_terbang = "ya";
	$ayam->suara = "kukuriuuk";

	echo "ayam <br>";
	echo "nama : $ayam->nama <br>";
	echo "jumlah kaki : $ayam->jumlah_kaki <br>";
	echo "bisa terbang : $ayam->bisa_terbang <br>";
	echo "suara : $ayam->suara <br>";
	echo "<hr>";

class honda_civic{
		public $nama, $jumlah_roda, $bisa_jalan, $suara;
	}

	$honda_civic = new honda_civic;
	$honda_civic->nama = "Erisna";
	$honda_civic->jumlah_roda = "4";
	$honda_civic->bisa_jalan = "ya";
	$honda_civic->bahan_bakar = "bensin";
	$honda_civic->suara = "brom broom";

	echo "honda_civic  <br>";
	echo "nama : $honda_civic->nama <br>";
	echo "jumlah roda : $honda_civic->jumlah_roda <br>";
	echo "bisa jalan : $honda_civic->bisa_jalan <br>";
	echo "honda civic : bahan bakar : bensin <br>";
	echo "suara : $honda_civic->suara <br>";
	echo "<hr>";
