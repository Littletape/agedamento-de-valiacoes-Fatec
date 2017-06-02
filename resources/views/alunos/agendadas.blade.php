@extends("alunos.header")

@section("conteudo")

<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12">
		<div class="panel panel-primary">
			<div class="panel-heading"><center><b>Avaliações Agendadas</b></center></div>

			<table class="table table-striped">
				<thead>
					<th>Materia</th>
					<th>Data</th>
					<th>Ações</th>
				</thead>
				@forelse($result as $avaliacao)
					<tr>
					<td>{{$avaliacao->nome}}</td><td>{{$avaliacao->data}}</td>
					<td>
						<button pdfNome='{{$avaliacao->pdf_nome}}' id='{{$avaliacao->id}}' class="btn btn-success">Ver Prova</button>
						<button class="btn btn-danger" id='{{$avaliacao->id}}'>Cancelar Agendamento</button>
					</td>
				</tr>
				@empty
					<h3>Nenhuma matéria agendada até o momento</h3>
				@endforelse
				
				
			</table>
		</div>
	</div>
</div>

<style type="text/css">
	th, td{text-align: center}
</style>

@endsection