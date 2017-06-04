<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
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
					<li><a href="definirProvas"><b>Definir Provas</b></a></li>
					<li><a href="relatorio"><b>Gerar Relatorio</b></a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
										
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Usuario</b><span class="caret"></span></a>
						<ul class="dropdown-menu">

							<li><a href="logout">Logout</a></li>
							
						</ul>
					</li>

				</ul>
			</div><!-- /.navbar-collapse -->

		</div><!-- /.container-fluid -->
	</nav>

	<div class="container-fluid"> @yield('conteudo') </div>


</body>
</html>