<!DOCTYPE html>
<html>
<head>
	<title>TREINAMENTO PARA CRIAÇÃO DE JOGO</title>
	<script src="js/js.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src='js/js2.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
	<style>
		.caixa{
			background: #ddd;
		}
	</style>
</head>
<body onload="document.form1.txtReport.focus()">
		<form method="POST" action="getReport.php" name="form1">	
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 caixa">
						<h2 style="text-align: center">Today's Report</h2>
						<input type="text" name="txtReport" style="width: 100%; height: 200px;font-size: 20px;box-shadow: inset 1px 1px 7px #707070" />
						<input type="submit" class="btn btn-primary" style="text-align: center" value="ENVIAR" />
					</div>
				</div>	
			</div>	
		</form>
</body>

</html>