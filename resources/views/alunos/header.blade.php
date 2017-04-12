<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

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

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><b>FATEC</b></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="agendamento"><b>Agendar Avaliações</b></a></li>
				<li><a href="agendadas"><b>Avaliações Agendadas</b></a></li>
			</ul>
	      
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Usuario</b><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<b>
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						</b>
					</ul>
				</li>

			</ul>
	    </div><!-- /.navbar-collapse -->

	</div><!-- /.container-fluid -->
</nav>

<div class="container-fluid"> @yield('conteudo') </div>


</body>
</html>