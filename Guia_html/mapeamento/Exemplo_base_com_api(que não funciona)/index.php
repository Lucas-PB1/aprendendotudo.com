<?php
require_once 'modules/hg-api.php';
require_once 'config/config.php';

$hg = new HG_API(HG_API_KEY);
$dolar = $hg -> dolar_quotation();

if ($hg->is_error() == false) {
	$variation = ($dolar['variation'] <= 0) ? 'danger' : 'info';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cotação Dólar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="conteiner">
		<div class="row">
			<div class="col-12">
				<p>Cotação dolar</p>
				<p>USD<span class="badge badge-pill badge-primary"><?php echo $variation; ?></span></p>
			</div>
		</div>	
	</div>
</body>
</html>
