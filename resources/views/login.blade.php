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
	<br><br><br>
	<div>
		<div class="row">
			<center><img src="/images/fatec_logo.png" width="25%" title="Logo da Fatec de Jaboticabal"></center>
		</div><br>

		<form>
		{!!csrf_field()!!}

		<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			<input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
		</div>
		</div><br>

		<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			<input type="senha" name="senha" id="senha" placeholder="Senha" class="form-control">
		</div>
		</div><br>

		<div class="row">
		<div class="col-xs-12 col-md-2 col-md-offset-5">
			<button type="submit" class="btn btn-success col-xs-12 col-md-12">Entrar</button>
		</div>
		</div><br>

		</form>
	</div>
	
</div>

<div class='container'>@yeild('container')</div>

</body>
</html>
<style type="text/css">
	.form-control{border-color: grey;}
</style>