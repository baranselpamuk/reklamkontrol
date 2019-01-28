<?php
	/**
		* Fonksiyon Dosyası
		* User: Abdullah Bozdağ
		* Date: 17.05.2017
		* Time: 11:10
	*/
	
	date_default_timezone_set('Europe/Istanbul');
	require_once 'PHPMailerAutoload.php';
	require_once('class.phpmailer.php');
	require_once('class.smtp.php');
	
	function GetIP(){
		if(getenv("HTTP_CLIENT_IP")) {
			$ip = getenv("HTTP_CLIENT_IP");
			} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
			$ip = getenv("HTTP_X_FORWARDED_FOR");
			if (strstr($ip, ',')) {
				$tmp = explode (',', $ip);
				$ip = trim($tmp[0]);
			}
			} else {
			$ip = getenv("REMOTE_ADDR");
		}
		return $ip;
	}
	
	function p($par, $st = false){
		if($st){
			return htmlspecialchars(addslashes(trim($_POST[$par])));
			}else{
			return addslashes(trim($_POST[$par]));
		}
	}
	
	function g($par){
		//return strip_tags(trim($_GET[$par]));
		if(isset($_GET[$par])){
			return htmlspecialchars(addslashes(trim($_GET[$par])));
		}
		
	}
	
	function kisalt($par, $uzunluk =50){
		if (strlen($par) > $uzunluk){
			$par = mb_substr($par, 0, $uzunluk, "UTF-8")."";
		}
		return $par;
	}
	
	function go($par, $time = 0){
		if ($time == 0){
			header("Location: {$par}");
			}else {
			header("Refresh: {$time}; url={$par}");
		}
	}
	
	function ss($par){
		return stripslashes($par);
	}
	
	function session($par){
		if(isset($_SESSION[$par])){
			return $_SESSION[$par];
			}else {
			return false;
		}
	}
	
	function cookie($par){
		if(isset($_COOKIE[$par])){
			return $_COOKIE[$par];
			}else {
			return false;
		}
	}
	
	function session_olustur($par){
		foreach ($par as $anahtar => $deger){
			$_SESSION[$anahtar] = $deger;
		}
	}
	
	
	
	function datetimeCevir($date){
		$timestamp = strtotime($date);
		$date_formated = date('Y-m-d H:i:s', $timestamp);
		return $date_formated;
	}
	
	function sef_link($s) {
		$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',',"'","!",'"');
		$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','',"","","");
		$s = str_replace($tr,$eng,$s);
		$s = strtolower($s);
		$s = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i","-",$s);
		$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
		$s = preg_replace('/\s+/', '-', $s);
		$s = preg_replace('|-+|', '-', $s);
		$s = preg_replace('/#/', '', $s);
		$s = str_replace('.', '', $s);
		$s = trim($s, '-');
		return $s;
	}
	
	function query($query){
		return mysqli_fetch_array($query);
		//return mysqli_query($query);
	}
	
	function row($query){
		return mysqli_fetch_array($query);
	}
	
	function rows($query){
		return mysqli_num_rows($query);
	}
	
	
	function tarihFark($tarih1,$tarih2,$ayrac)
	{
		list($y1,$a1,$g1) = explode($ayrac,$tarih1);
		list($y2,$a2,$g2) = explode($ayrac,$tarih2);
		$t1_timestamp = mktime('0','0','0',$a1,$g1,$y1);
		$t2_timestamp = mktime('0','0','0',$a2,$g2,$y2);
		if ($t1_timestamp > $t2_timestamp)
		{
			$result = ($t1_timestamp - $t2_timestamp) / 86400;
		}
		elseif ($t2_timestamp > $t1_timestamp)
		{
			$result = ($t2_timestamp - $t1_timestamp) / 86400;
		}
		return $result;
	}
	$suanTarihSaat=date("Y-m-d H:i:s");
	$suanSaat=date("H:i:s");
	$suanTarih=date("Y-m-d");
	
	
	
	
?>
