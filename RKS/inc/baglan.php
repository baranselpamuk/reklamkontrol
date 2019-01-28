<?php
	/**
		* Created by PhpStorm.
		* User: Baransel Pamuk
		* Date: 17.05.2018
		* Time: 09:10
	*/
	//error_reporting(0);
	ob_start();
	
	$host="localhost";
	$db_k_adi="root";
	$db_sifre="";
	$db_adi="baranselbilisim_rks";
	
	$baglan= mysqli_connect($host,$db_k_adi,$db_sifre,$db_adi);
	mysqli_query($baglan,"SET NAMES 'utf8'");
	mysqli_query($baglan,"SET CHARACTER SET utf8");
	mysqli_query($baglan,"SET COLLATION_CONNECTION = 'utf8_turkish_ci' ");
	
	$siteAdres = "http://localhost/RKS";
?>
