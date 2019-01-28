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
		
			
			
		
				
				$update = $baglan->query("UPDATE reklamlar SET
				adi = '$adi',
				site = '$site',
				fiyat = '$fiyat',
				baslangic_tarihi = '$baslangic_tarihi',
				bitis_tarihi = '$bitis_tarihi',
				aciklama = '$aciklama'
				WHERE id = '$id'");
				
				if ($update){
					$hata = 'Başarılı! <span class="u-showFrom-m">Reklam Güncellenmiştir</span>';
					echo $hata;
				go($siteAdres, 1);
					
					
				}else {
					$hata = "Bir sorun oluştu ve bilgiler güncellenemedi.<br /><strong>Mysql Hatası: </strong>".mysqli_error($baglan);
					echo $hata;
				}
				
			
			
			
		}
		
		
	}

?>