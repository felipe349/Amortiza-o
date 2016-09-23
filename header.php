<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Amortização</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		    html {
			  position: relative;
			  min-height: 100%;
			}
			body {
			  /* Margin bottom by footer height */
			  margin-bottom: 60px;
			}
			.footer {
			  position: absolute;
			  bottom: 0;
			  width: 100%;
			  /* Set the fixed height of the footer here */
			  height: 60px;
			  background-color: #3578B0;
			}
			#corb{
				color:#000;
			}
			#cor{
				color:white;
			}
			#cor:hover{
				background-color: #fff;
				color:#042037;
			}
			li{
				margin:10px;
			}
			.caixa{
				background-color:#fff;
				padding:100px;
				margin-bottom:10px;
				border-radius: 20px;
			}
			a {
				text-decoration: none !important;
			}
			button:hover{
				background-color: #3578B0;
				color: #fff !important;
			}
			button > a:hover{
				color: #fff !important;
			}
			#voador{
				background-color: #3578B0;
			}
			p > a{
				color:#fff;
			}
			@media (max-width:768px){ .footer{position:absolute;width:100%;} }
			@media (min-width:768px){ .footer{position:absolute;bottom:0;height:60px;width:100%;}}
	</style>
	
	<script>
	</script>
</head>
<body style="background-color:#E8E8E8">

	<div class="navbar" id="voador">
		<div class="container">
			<div >
				<ul class="nav navbar-nav">
					<li><a href="index.php" id="cor">Início</a></li>
					<li><a href="#" id="cor">Amortização Constante</a></li>
					<li><a href="#" id="cor">Amortização Americana</a></li>
					<li><a href="#" id="cor">Tabela Price</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">