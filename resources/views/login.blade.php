<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<!-- fonts -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
	<script type="text/javascript" src="/js/mask/jquery.mask.js"></script>
	<script type="text/javascript" src="/js/pessoas.js"></script>
	<script src="/js/chart/Chart.js"></script>
</head>
<body>

<div class="container">
	<br>
	<div style="border: solid; border-radius: 10px; border-color: green;"><br>
		<form>
		{!!csrf_field()!!}

		<div class="row">
		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
		</div>
		</div><br>

		<div class="row">
		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<input type="senha" name="senha" id="senha" placeholder="Senha" class="form-control">
		</div>
		</div><br>

		<div class="row">
		<div class="col-xs-12 col-md-3 col-md-offset-6">
			<button type="submit" class="btn btn-success">Confirmar</button>
		</div>
		</div><br>

		</form>
	</div>
	
</div>

</body>
</html>