<?php
	include "ust.php"; 
	
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
        <h1 class="display-3">Reklam Ekle</h1>
	</div>
</div>



<div class="container">
	<!-- Example row of columns -->
	<div class="row">
        <div class="col-md-12">
			<h2 id="header">
				<strong>Ekleme Formu</strong>
				<!-- <small class="text-muted">yan açıklama</small> -->
			</h2>
			<form action="" class="newsletter js-newsletter-form" method="post" enctype="multipart/form-data">

        
			
	<?php require_once "ekle_post.php"; ?>
	
			<div class="form-group row">
				<label for="adi" class="col-2 col-form-label">Adı</label>
				<div class="col-10">
					<input class="form-control" type="text" name="adi" id="adi" required>
				</div>
			</div>	
			
			<div class="form-group row">
				<label for="site" class="col-2 col-form-label">Site</label>
				<div class="col-10">
					<input class="form-control" type="text" name="site" id="site" required>
				</div>
			</div>	
			
			
			
			
			<div class="form-group row">
				<label for="fiyat" class="col-2 col-form-label">Fiyat</label>
				<div class="input-group col-10">
					
					<input type="number" class="form-control" name="fiyat" id="fiyat" required>
					<div class="input-group-addon">₺</div>
				</div>
			</div>	
			
			<div class="form-group row">
				<label for="baslangic_tarihi" class="col-2 col-form-label">Başlangıç Tarihi</label>
				<div class="col-10">
					<input class="form-control" type="date" name="baslangic_tarihi" id="baslangic_tarihi" required>
				</div>
			</div>	
			
			
			<div class="form-group row">
				<label for="bitis_tarihi" class="col-2 col-form-label">Bitiş Tarihi</label>
				<div class="col-10">
					<input class="form-control" type="date" name="bitis_tarihi" id="bitis_tarihi" required>
				</div>
			</div>	
			
			
			<div class="form-group row">
				<label for="aciklama" class="col-2 col-form-label">Açıklama</label>
				<div class="col-10">
					<textarea class="form-control" name="aciklama" id="aciklama" rows="3" required></textarea>
				</div>
			</div>	
			
			 <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Ekle</button>
      </div>
    </div>
			
			<script>
				CKEDITOR.replace( 'aciklama' );
			</script>
			</form>
		</div>
		
		
	</div>
	
	
	<br><br>
	
	
	<hr>
	
	<?php 
		include "alt.php";
	?>				