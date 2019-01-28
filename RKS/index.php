<?php
	include "ust.php"; 
	
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
        <h1 class="display-3">Reklam Kontrol Sistemi - RKS </h1>
        <p>Bu sayfada yapılan anlaşmalar, alınan reklamlar hakkında bilgi sahibi olabilirsiniz.</p>
	</div>
</div>



<div class="container">
	<!-- Example row of columns -->
	<div class="row">
        <div class="col-md-12">
			<h2 id="header">
				<strong>Reklamlar</strong>
				<!-- <small class="text-muted">yan açıklama</small> -->
			</h2>
			<p>Standart olarak bitime yakın reklamlar listelenir. </p>
			
			<table id="reklamlar" class="table table-striped table-bordered table-responsive" cellspacing="0" >
				<thead>
					<tr>
						<th>Adı</th>
						<th>Site</th>
						<th>Fiyat</th>
						<th>Başlangıç Tarihi</th>
						<th>Kaç Gün Kaldı?</th>
						<th>İşlemler</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Adı</th>
						<th>Site</th>
						<th>Fiyat</th>
						<th>Başlangıç Tarihi</th>
						<th>Kaç Gün Kaldı?</th>
						<th>İşlemler</th>
					</tr>
				</tfoot>
				<tbody>
					<?php 
						$reklamQuery = $baglan->query("SELECT * FROM reklamlar") or die(mysqli_error($baglan));
						if (mysqli_affected_rows($baglan)){
							while ($row = row($reklamQuery)){
								
								$baslangTar = $row["baslangic_tarihi"];
								$bitisTar = $row["bitis_tarihi"];
								$fiyat = $row["fiyat"];
								$site = $row["site"];
								$adi = $row["adi"];
								$detay = $row["aciklama"];
								$bitis = tarihFark($suanTarih,$bitisTar,'-');
								if ($bitisTar >= $suanTarih){ 
									
								?>
								
								<tr>
									<td><?php echo ss($adi); ?></td>
									<td><?php echo ss($site); ?></td>
									<td><?php echo ss($fiyat); ?></td>
									<td><?php echo ss($baslangTar); ?></td>
									<td>
										<?php 
											if($bitis <= 1){
												echo '<span class="badge badge-danger"> Son 1 Gün Bugün Bitiyor.</span>';
												}else if($bitis<=7){
												echo '<span class="badge badge-warning">'.ss($bitis).' gün kaldı</span>';
												}else if($bitis>=7){
												echo '<span class="badge badge-success">'.ss($bitis).' gün kaldı</span>';
											}
										?>
									</td>
									<td>
										<a class="btn btn-info" href="#" data-toggle="modal" data-target="#detayModal<?php echo ss($row["id"]); ?>">Detay</a>
										<a class="btn btn-success" href="reklam_duzenle.php?id=<?php echo ss($row["id"]); ?>">Düzenle</a>
										<a class="btn btn-danger" href="reklam_sil.php?id=<?php echo ss($row["id"]); ?>">Sil</a>
									</td>
								</tr>
								
								<!-- Modal -->
								<div class="modal fade" id="detayModal<?php echo ss($row["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel"><?php echo ss($adi); ?></h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<strong>Site :</strong> <?php echo ss($site); ?><br>
												<strong>Fiyat :</strong> <?php echo ss($fiyat); ?><br>
												<strong>Başlangıç Tarihi :</strong> <?php echo ss($baslangTar); ?><br>
												<strong>Bitiş Tarihi :</strong> <?php echo ss($bitisTar); ?><br>
												<strong>Bilgi ;</strong><br> <?php echo ss($detay); ?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
											</div>
										</div>
									</div>
								</div>
								
								<?php 
								}
							}
						}
					?>
					
				</tbody>
			</table>
			
		</div>
		
		
	</div>
	
	
	<br><br>
	<div class="row" id="biten">
        <div class="col-md-12">
			
			<h2 id="header">
				<strong>Biten Reklamlar</strong>
				<!-- <small class="text-muted">yan açıklama</small> -->
			</h2>
			<p>Yayın Süresi Biten Reklamlar</p>
			
			<table id="biten_reklamlar" class="table table-striped table-bordered table-responsive" cellspacing="0" >
				<thead>
					<tr>
						<th>Adı</th>
						<th>Site</th>
						<th>Fiyat</th>
						<th>Başlangıç Tarihi</th>
						<th>Kaç Gün Kaldı?</th>
						<th>İşlemler</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Adı</th>
						<th>Site</th>
						<th>Fiyat</th>
						<th>Başlangıç Tarihi</th>
						<th>Kaç Gün Kaldı?</th>
						<th>İşlemler</th>
					</tr>
				</tfoot>
				<tbody>
					<?php 
						$reklamQuery = $baglan->query("SELECT * FROM reklamlar") or die(mysqli_error($baglan));
						if (mysqli_affected_rows($baglan)){
							while ($row = row($reklamQuery)){
								
								$baslangTar = $row["baslangic_tarihi"];
								$bitisTar = $row["bitis_tarihi"];
								$fiyat = $row["fiyat"];
								$site = $row["site"];
								$adi = $row["adi"];
								$detay = $row["aciklama"];
								$bitis = tarihFark($suanTarih,$bitisTar,'-');
								if ($suanTarih > $bitisTar){ 
									
								?>
								
								<tr>
									<td><?php echo ss($adi); ?></td>
									<td><?php echo ss($site); ?></td>
									<td><?php echo ss($fiyat); ?></td>
									<td><?php echo ss($baslangTar); ?></td>
									<td>
										<?php 
											echo '<span class="badge badge-warning">'.ss($bitis).' gün geçti</span>';
										?>
									</td>
									<td>
										<a class="btn btn-info" href="#" data-toggle="modal" data-target="#detayModal<?php echo ss($row["id"]); ?>">Detay</a>
										<a class="btn btn-success" href="reklam_duzenle.php?id=<?php echo ss($row["id"]); ?>">Düzenle</a>
										<a class="btn btn-danger" href="reklam_sil.php?id=<?php echo ss($row["id"]); ?>">Sil</a>
									</td>
								</tr>
								
								<!-- Modal -->
								<div class="modal fade" id="detayModal<?php echo ss($row["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel"><?php echo ss($adi); ?></h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<strong>Site :</strong> <?php echo ss($site); ?><br>
												<strong>Fiyat :</strong> <?php echo ss($fiyat); ?><br>
												<strong>Başlangıç Tarihi :</strong> <?php echo ss($baslangTar); ?><br>
												<strong>Bitiş Tarihi :</strong> <?php echo ss($bitisTar); ?><br>
												<strong>Bilgi ;</strong><br> <?php echo ss($detay); ?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
											</div>
										</div>
									</div>
								</div>
								
								<?php 
								}
							}
						}
					?>
					
				</tbody>
			</table>
		</div>
	</div>
	<br><br>
	<div class="container" id="istatistik">
<div class="row">
        <div class="col-md-12">
			<?php
			
				$toplamFiyatQuery = $baglan->query("SELECT SUM(fiyat) FROM reklamlar");  
				$fiyatrow = mysqli_fetch_array($toplamFiyatQuery); 

				$ustQuery = "SELECT * FROM reklamlar";
				$result = $baglan->query($ustQuery);
				$ustArray = array();
				
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()) {
						$jsonArrayItem = array();
						$jsonArrayItem['y'] = $row['fiyat'];
						$jsonArrayItem['label'] = $row['site'];
						array_push($ustArray, $jsonArrayItem);
					}
					
					
				}
				
				
			?>
			<h2 id="header">
				<strong>İstatistik</strong>
				<!-- <small class="text-muted">yan açıklama</small> -->
			</h2>
			
			<div class="row">
				<div class="col-md-12">
					<div class="card shadow">
						<h4 class="card-header">Toplam 
							<span class="tag tag-success" id="revenue-tag" style="background-color: #5cb85c;"><?php  echo $fiyatrow['SUM(fiyat)'];  ; ?> ₺</span>
						</h4>
						<div class="card-block">
							<div id="revenue-column-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->
			<br><!-- 
			<div class="row">
				<div class="col-sm-5 col-md-6">
					<div class="card shadow">
						<h4 class="card-header">Son 7 Gün</h4>
						<div class="card-block">
							<div id="products-revenue-pie-chart"></div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-5 col-md-6">
					<div class="card shadow">
						<h4 class="card-header">Son 1 Ay</h4>
						<div class="card-block">
							<div id="orders-spline-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->
			
		</div>
	</div>
	</div>
	
	<script>
		$(function () {
			var totalRevenue = 15341110;
			
			// üstteki analytics
			var revenueColumnChart = new CanvasJS.Chart("revenue-column-chart", {
				animationEnabled: true,
				backgroundColor: "transparent",
				theme: "theme2",
				axisX: {
					labelFontSize: 14,
					valueFormatString: "MMM YYYY"
				},
				axisY: {
					labelFontSize: 14,
					prefix: "₺"
				},
				toolTip: {
					borderThickness: 0,
					cornerRadius: 0
				},
				data: [
				{
					type: "column",
					yValueFormatString: "###,###.## ₺",
					dataPoints: <?php echo json_encode($ustArray, JSON_NUMERIC_CHECK); ?>
				}
				]
			});
			
			revenueColumnChart.render();
			
			//2. analytics
			var productsRevenuePieChart = new CanvasJS.Chart("products-revenue-pie-chart", {
				animationEnabled: true,
				theme: "theme6",
				legend: {
					fontSize: 14
				},
				toolTip: {
					borderThickness: 0,
					content: "<span style='\"'color: {color};'\"'>{name}</span>: ${y} (#percent%)",
					cornerRadius: 0
				},
				data: [
				{       
					indexLabelFontColor: "#676464",
					indexLabelFontSize: 14,
					legendMarkerType: "square",
					legendText: "{indexLabel}",
					showInLegend: true,
					startAngle:  90,
					type: "pie",
					dataPoints: [
					{  y: 6289855, name:"Product A", indexLabel: "Product A - 41%", legendText: "Product A", exploded: true },
					{  y: 2761400, name:"Product B", indexLabel: "Product B - 18%", legendText: "Product B" },
					{  y: 3681866, name:"Product C", indexLabel: "Product C - 24%", legendText: "Product C", color: "#8064a1" },
					{  y: 2607989, name:"Product D", indexLabel: "Product D - 17%", legendText: "Product D" }
					]
				}
				]
			});
			
			productsRevenuePieChart.render();
			
			//3. analytics
			var ordersSplineChart = new CanvasJS.Chart("orders-spline-chart", {
				animationEnabled: true,
				backgroundColor: "transparent",
				theme: "theme2",
				toolTip: {
					borderThickness: 0,
					cornerRadius: 0
				},
				axisX: {
					labelFontSize: 14,
					maximum: new Date("31 Dec 2015"),
					valueFormatString: "MMM YYYY"
				},
				axisY: {
					gridThickness: 0,
					labelFontSize: 14,
					lineThickness: 2
				},
				data: [
				{
					type: "spline",
					dataPoints: [
					{ x: new Date("1 Jan 2015"), y: 17376 },
					{ x: new Date("1 Feb 2015"), y: 21431 },
					{ x: new Date("1 Mar 2015"), y: 25724 },
					{ x: new Date("1 Apr 2015"), y: 22138 },
					{ x: new Date("1 May 2015"), y: 20676 },
					{ x: new Date("1 Jun 2015"), y: 25429 },
					{ x: new Date("1 Jul 2015"), y: 29160 },
					{ x: new Date("1 Aug 2015"), y: 23317 },
					{ x: new Date("1 Sep 2015"), y: 31883 },
					{ x: new Date("1 Oct 2015"), y: 30034 },
					{ x: new Date("1 Nov 2015"), y: 31768 },
					{ x: new Date("1 Dec 2015"), y: 41215 }
					]
				}
				]
			});
			
			ordersSplineChart.render();
			
		});
	</script>
	
	<hr>
	
<?php 
	include "alt.php";
?>