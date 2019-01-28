<?php
	
	
	if ($_POST){
		$adi = p("adi", true);
		$site = p("site", true);
		$fiyat = p("fiyat", true);
		$baslangic_tarihi = p("baslangic_tarihi", true);
		$bitis_tarihi = p("bitis_tarihi", true);
		$aciklama = p("aciklama");
	
	
		
	
		
		
		if(!$adi){
			$hata = 'HATA! <span class="u-showFrom-m">Tüm Alanları Doldurmanız Gerekmekte</span>';
			echo $hata;
		}else{
		
			if($baslangic_tarihi>$bitis_tarihi){
				$hata = 'HATA! <span class="u-showFrom-m">Başlangıç Tarihi Bitiş Tarihinden Büyük Olamaz</span>';
				echo $hata;
			}else{
			
		
				
				$insert = $baglan->query("INSERT INTO reklamlar SET
				adi = '$adi',
				site = '$site',
				fiyat = '$fiyat',
				baslangic_tarihi = '$baslangic_tarihi',
				bitis_tarihi = '$bitis_tarihi',
				aciklama = '$aciklama'");
				
				if ($insert){
					$hata = 'Başarılı! <span class="u-showFrom-m">Reklam Eklenmiştir</span>';
					echo $hata;
				go($siteAdres, 1);
					
					
				}else {
					$hata = "Bir sorun oluştu ve bilgiler güncellenemedi.<br /><strong>Mysql Hatası: </strong>".mysqli_error($baglan);
					echo $hata;
				}
				
			
			
			
		}}
		
		
	}

?>