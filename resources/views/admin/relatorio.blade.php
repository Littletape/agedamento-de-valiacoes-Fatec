@extends("admin.header")

@section("conteudo")

<div class="row">

	<div class="col-md-4">
		<div class="panel panel-primary"> <!--style="border-radius:50px"-->
			<div class="panel panel-heading">Provas agendadas para hoje</div>
			<div class="panel-body">
				<h4>Formato: .pdf <img src="images/pdfIco.png"></h4>
				<h4>Conteudo do arquivo:</h4>
				<p>Data, Semestre, Materia, Nome do Aluno</p>						
			</div>
			<div class="panel-footer">
				<center><a href="">Download<br><span class="glyphicon glyphicon-download"> <b style="text-align: center;"></span></b></a></center>
			</div>
		</div>
	</div> <!-- Div col-md-4-->

	<div class="col-md-4">
		<div class="panel panel-primary"> <!--style="border-radius:50px"-->
			<div class="panel panel-heading">Confirmações de presença</div>
			<div class="panel-body">
				<h4>Formato: .xls (excel)<img src="images/exelIco.png"></h4>
				<h4>Conteudo do arquivo:</h4>
				<p>Data, Semestre, Materia, Nome do Aluno</p>
			</div>
			<div class="panel-footer">
				<center><a href="">Download<br><span class="glyphicon glyphicon-download"> <b style="text-align: center;"></span></b></a></center>
			</div>
		</div>
	</div> <!-- Div col-md-4-->

	<div class="col-md-4">
		<div class="panel panel-primary"> <!--style="border-radius:50px"-->
			<div class="panel panel-heading">Relatorio Geral</div>
			<div class="panel-body">
				<h4>Formato: .xls (excel)<img src="images/exelIco.png"></h4>
				<h4>Conteudo do arquivo:</h4>
				<p>Data, semestre, materia, Nome do Aluno</p>
			</div>
			<div class="panel-footer">
				<center><a href="">Download<br><span class="glyphicon glyphicon-download"> <b style="text-align: center;"></span></b></a></center>
			</div>
		</div>
	</div> <!-- Div col-md-4-->	

</div>



<style type="text/css">
	.form-control{border-color: grey;}
	img{width: 10%; height: 10%;}
</style>

@endsection