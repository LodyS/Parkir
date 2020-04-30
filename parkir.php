<?php

$jam_masuk  = strtotime($_POST['jam_masuk']);
$jam_keluar = strtotime($_POST['jam_keluar']);

$lama = $jam_keluar - $jam_masuk;
$jam   = floor($lama / (60 * 60));
$parkir_diatas_dua_jam = ($jam  - 2) * 500 + 2000;

  if ($jam <=2){
	 
	echo "Biaya parkir Rp. 2000 <br/>";
         } 
            else {
	      echo "Biaya Parkir : $parkir_diatas_dua_jam<br/>";
  }

echo "Lama parkir    : ".$jam." Jam<br/>";
echo "Jam masuk      : ".date("H:i", $jam_masuk)."<br/>";
echo "Jam keluar     : ".date("H:i", $jam_keluar)."<br/>";
