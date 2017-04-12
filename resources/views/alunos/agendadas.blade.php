@extends("alunos.header")

@section("conteudo")

<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12">
		<div class="panel panel-primary">
			<div class="panel-heading"><center><b>Avaliações Agendadas para hoje</b></center></div>

			<table class="table table-striped">
				<thead>
					<th>Materia</th>
					<th>Data</th>
					<th>Ações</th>
				</thead>

				<tr>
					<td>XXXXX</td><td>XX/xx/xxxx</td>
					<td>
						<button class="btn btn-success">Ver Prova</button>
						<button class="btn btn-danger">Cancelar Agendamento</button>
					</td>
				</tr>
				<tr>
					<td>XXXXX</td><td>XX/xx/xxxx</td>
					<td>
						<button class="btn btn-success">Ver Prova</button>
						<button class="btn btn-danger">Cancelar Agendamento</button>
					</td>
				</tr>
				<tr>
					<td>XXXXX</td><td>XX/xx/xxxx</td>
					<td>
						<button class="btn btn-success">Ver Prova</button>
						<button class="btn btn-danger">Cancelar Agendamento</button>
					</td>
				</tr>
				<tr>
					<td>XXXXX</td><td>XX/xx/xxxx</td>
					<td>
						<button class="btn btn-success">Ver Prova</button>
						<button class="btn btn-danger">Cancelar Agendamento</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<style type="text/css">
	th, td{text-align: center}
</style>

@endsection