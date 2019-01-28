<?php 
	include "inc/baglan.php";
	include "inc/fonksiyon.php"; 
?>

			<div class="card-panel">
                    <h4 class="header2">Reklam Sil</h4>
					
			<?php
			
				
				$id = g("id");
				$delete = $baglan->query("DELETE FROM reklamlar WHERE id = '$id' ");
				if ($delete){
					
					echo '
					
                        <p>Başarılı Şekilde Reklam Silindi.</p>
                    
							
							';
					
					
					go($siteAdres);
					
				}else{
					echo '	
                        <p>Mysql Hatası : '.mysqli_error($baglan).'</p>
                    ';
				}
				
				
			
			
			?>
			
	</div>