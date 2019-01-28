<?php 
	include "inc/baglan.php";
	include "inc/fonksiyon.php"; 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Reklam Sistemi</title>

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css" >
 <link href="css/jumbotron.css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js">
	</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


<script src="https://use.fontawesome.com/d682fef928.js"></script>
	<!-- Scripts -->
		<script src="assets/jquery/jquery-3.1.0.min.js"></script>
		<script src="assets/tether/tether.min.js"></script>
		<script src="assets/bootstrap/bootstrap4-alpha3.min.js"></script>
		<script src="js/canvasjs.min.js"></script>
	
	

	<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

		<script type="text/javascript" class="init">
	

$(document).ready(function() {
	
        $('#reklamlar').dataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Turkish.json"
			    
            },
			"order": [[ 4, "asc" ]]
        } );
		$('#biten_reklamlar').dataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Turkish.json"
			    
            },
			"order": [[ 4, "asc" ]]
        } );

	
} );


	</script>
	
		
		<style>
			body {
				background-color: #fafafa;
				font-size: 16px;
				line-height: 1.5;
			}
			
			h1,h2,h3,h4,h5,h6 {
				font-weight: 400;	
			}
			
			#header {
				border-bottom: 5px solid #37474F;
				color: #37474F;
				margin-bottom: 1.5rem;
				padding: 1rem 0;
			}
			
			#revenue-tag {
				font-weight: inherit !important;
				border-radius: 0px !important;
			}
			
			.card {
				border: 0rem;
				border-radius: 0rem;
			}
			
			.card-header {
				background-color: #37474F;
				border-radius: 0 !important;
				color:	white;
				margin-bottom: 0;
				padding:	1rem;
			}
			
			.card-block {
				border: 1px solid #cccccc;	
			}
			
			.shadow {
				box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14),
										0 1px 18px 0 rgba(0, 0, 0, 0.12),
										0 3px 5px -1px rgba(0, 0, 0, 0.2);
			}
			
			#revenue-column-chart, #products-revenue-pie-chart, #orders-spline-chart {
				height: 300px;
				width: 100%;
			}			
		</style>
		

</head>

    <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $siteAdres; ?>">RKS</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $siteAdres; ?>/index.php">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $siteAdres; ?>/#biten">Biten Reklamlar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $siteAdres; ?>/#istatistik">İstatistik</a>
          </li>
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">İşlemler</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo $siteAdres; ?>/reklam_ekle.php">Reklam Ekle</a>
            </div>
          </li>
        </ul>
   
      </div>
    </nav>