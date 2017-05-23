@extends("admin.header")

@section("conteudo")

<div class="row">
	<div class="col-md-6 col-md-offset-3 col-xs-12">
		
		<form>
			<label>Digite os termos que devem aparecer no relatorio:</label>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Palavras Chaves">
				<span class="input-group-btn">
					<button class="btn btn-success" type="button"><span class="glyphicon glyphicon-file"/></button>
				</span>
			</div>

			<center><h1>OU</h1></center>

			<label>Selecione o curso:</label>
			<select class="form-control">
				<option>Todos os cursos</option>
				<option>Curso 1</option>
				<option>Curso 2</option>
			</select><br>

			<label>Selecione o semestre:</label>
			<select class="form-control">
				<option>Todos os Semestres</option>
				<option>Semestre 1</option>
				<option>Semestre 2</option>
			</select><br>

			<label>Selecione a Materia:</label>
			<select class="form-control">
				<option>Todos as Materias</option>
				<option>Materia 1</option>
				<option>Materia 2</option>
			</select><br>

			<button type="submit" class="btn btn-success col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">Gerar Relatorio</button>
		</form>

	</div>
</div>

<style type="text/css">
	.form-control{border-color: grey;}
</style>

@endsection