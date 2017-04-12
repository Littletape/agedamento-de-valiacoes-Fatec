@extends("alunos.header")

@section("conteudo")
<div class="row">
	<h1><center>Agerndamento de Avaliações</center></h1>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12">
		<form>
			<div class="panel panel-default">
				<div class="panel-heading"><center><b>Semestre XX</b></center></div>
				<table class="table table-striped">
					<thead>
						<th colspan="7">Semana xx</th>
					</thead>
					<thead>
						<th>Materia</th>
						<th>xx/xx/xxxx<br>Segunda-Feira</th>
						<th>xx/xx/xxxx<br>Terça-Feira</th>
						<th>xx/xx/xxxx<br>Quarta-Feira</th>
						<th>xx/xx/xxxx<br>Quinta-Feira</th>
						<th>xx/xx/xxxx<br>Sexta-Feira</th>
						<th>xx/xx/xxxx<br>Sabado</th>
					</thead>

					<tr>
						<td>YYYY</td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
					</tr>
					<tr>
						<td>YYYY</td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
					</tr>
					<tr>
						<td>YYYY</td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
					</tr>
					<tr>
						<td>YYYY</td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
						<td>Teste<br><input type="checkbox" name=""></td>
					</tr>
				</table>
			</div>	
		</form>
	</div>	
</div>

<style type="text/css">
	th, td{text-align: center}
	input{width: 20px; height: 20px;}
</style>

@endsection