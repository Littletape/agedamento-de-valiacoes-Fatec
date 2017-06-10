@extends("admin.header")

@section("conteudo")

<div class="row">

	<form method="get" action="/relatorio/agendadasHoje">
	<div class="col-md-3">
		<div class="panel panel-primary"> <!--style="border-radius:50px"-->
			<div class="panel panel-heading">Provas agendadas para hoje</div>
			<div class="panel-body">
				<h4>Formato: .pdf <img src="images/pdfIco.png"></h4>
				<h4>Conteudo do arquivo:</h4>
				<p>Data, Semestre, Materia, Aluno</p>						
			</div>
			<div class="panel-footer">
				<center>
					<button type="submit" class="btn btn-primary">Download<br><span class="glyphicon glyphicon-download"></span></button>
				</center>
			</div>
		</div>
	</div> 	
	</form>
	
	<form method="get" action="/relatorio/qtdHoje">
	<div class="col-md-3">
		<div class="panel panel-primary"> <!--style="border-radius:50px"-->
			<div class="panel panel-heading">Qtd de provas agendas para hoje</div>
			<div class="panel-body">
				<h4>Formato: .pdf <img src="images/pdfIco.png"></h4>
				<h4>Conteudo do arquivo:</h4>
				<p>Data, Semestre, Materia, Qtd. Provas</p>
			</div>
			<div class="panel-footer">
				<center>
					<button type="submit" class="btn btn-primary">Download<br><span class="glyphicon glyphicon-download"></span></button>
				</center>
			</div>
		</div>
	</div>
	</form>

	<form method="get" action="/relatorio/qtdSemestre">
	<div class="col-md-3">
		<div class="panel panel-primary"> <!--style="border-radius:50px"-->
			<div class="panel panel-heading">Qtd de provas agendadas no semestre</div>
			<div class="panel-body">
				<h4>Formato: .pdf <img src="images/pdfIco.png"></h4>
				<h4>Conteudo do arquivo:</h4>
				<p>Data, semestre, materia, Qtd. Provas</p>
			</div>
			<div class="panel-footer">
				<center>
					<button type="submit" class="btn btn-primary">Download<br><span class="glyphicon glyphicon-download"></span></button>
				</center>
			</div>
		</div>
	</div>
	</form>

	<form method="get" action="/relatorio/agendadasSemestre">
	<div class="col-md-3">
		<div class="panel panel-primary"> <!--style="border-radius:50px"-->
			<div class="panel panel-heading">Provas agendadas no semestre</div>
			<div class="panel-body">
				<h4>Formato: .pdf <img src="images/pdfIco.png"></h4>
				<h4>Conteudo do arquivo:</h4>
				<p>Data, semestre, materia, Aluno, nota</p>
			</div>
			<div class="panel-footer">
				<center>
					<button type="submit" class="btn btn-primary">Download<br><span class="glyphicon glyphicon-download"></span></button>
				</center>
			</div>
		</div>
	</div>
	</form>

</div>



<style type="text/css">
	.form-control{border-color: grey;}
	img{width: 10%; height: 10%;}
</style>

@endsection