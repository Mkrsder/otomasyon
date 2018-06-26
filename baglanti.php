<?php


$host="localhost";
$user="root";
$sifre="";
$vtadi="sstp";

$baglanti=mysql_connect($host,$user,$sifre);
$vtsecim=mysql_select_db($vtadi,$baglanti);

if ($baglanti and $vtsecim) {
		echo "Bağlantı yapıldı. Tebrikler.. <br><br>";
	}else {
	 	echo ("Bağlantıda hata var. Kontrol et !! ".mysql_error());	
		
	}
	




//session_destroy();

//print_r ($_SESSION);

//setcookie("user","admin",time()+3600);
//setcookie("user","ali",time()+3600);
?>