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
		<div class="col-md-8 col-md-offset-2"><label>Insira aqui as datas das provas:</label></div>
		<div class="col-md-2 col-md-offset-2"><input type="date" name="data" class="form-control"></div>
		<div class="col-md-2">
			<select name="dia_semana" class="form-control">
				<option>Segunda-Feira</option>
				<option>Terça-Feira</option>
				<option>Quarta-Feira</option>
				<option>Quinta-Feira</option>
				<option>Sexta-Feira</option>
				<option>Sabado</option>
			</select>
		</div>
		<div class="col-md-3">
			<select name="materia" class="form-control">
				<option>Materia 1</option>
				<option>Materia 2</option>
			</select>
		</div>
		<div class="col-md-1"><input type="submit" name="busca" class="btn btn-success" value="Busca"></div>
	</div><br>
</form>

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
					<th><label>Segunda-Feira</label><br>xx/xx/xxxx</th>
					<th><label>Terça-Feira</label><br>xx/xx/xxxx</th>
					<th><label>Quarta-Feira</label><br>xx/xx/xxxx</th>
					<th><label>Quinta-Feira</label><br>xx/xx/xxxx</th>
					<th><label>Sexta-Feira</label><br>xx/xx/xxxx</th>
					<th><label>Sabado</label><br>xx/xx/xxxx</th>
				</thead>

				<tr>
					<td>Materia 1</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>

				<tr>
					<td>Materia 2</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>

				<tr>
					<td>Materia 3</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>

				<tr>
					<td>Materia 4</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>

			</table>
		
		</div>
	</div>	
</div>

<style type="text/css">
	th, td{text-align: center}
	.form-control{border-color: grey;}
	td>input{width: 20px; height: 20px}
</style>

@endsection