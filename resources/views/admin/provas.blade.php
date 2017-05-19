@extends("admin.header")

@section("conteudo")

<form>

	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<label>Selecione o Curso:</label>
			<select class="form-control" placeholder='Selecione o Curso'>
				<option>Curso1</option><option>Curso2</option>
			</select>
		</div>
	</div><br>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<select class="form-control">
						<option>1º Semestre</option><option>2ºSemestre</option>
					</select>
				</div>

				<table class="table table-striped">
					<thead>
						<th>Materias:</th>
						<th><input type="date" name="segunda" class="form-control"><br>Segunda-Feira</th>
						<th><input type="date" name="terca" class="form-control"><br>Terça-Feira</th>
						<th><input type="date" name="quarta" class="form-control"><br>Quarta-Feira</th>
						<th><input type="date" name="quinta" class="form-control"><br>Quinta-Feira</th>
						<th><input type="date" name="sexta" class="form-control"><br>Sexta-Feira</th>
						<th><input type="date" name="sabado" class="form-control"><br>Sabado</th>
					</thead>

					<tr>
						<td>Aula 1</td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
					</tr>

					<tr>
						<td>Aula 2</td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
					</tr>

					<tr>
						<td>Aula 3</td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
					</tr>

					<tr>
						<td>Aula 4</td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
						<td><select class="form-control"><option>Materia 1</option><option>Materia 2</option></select></td>
					</tr>

				</table>
			</div>
		</div>	
	</div>

</form>

<style type="text/css">
	th, td{text-align: center}
	/*input{width: 20px; height: 20px;}*/
	.form-control{border-color: grey;}
</style>

@endsection