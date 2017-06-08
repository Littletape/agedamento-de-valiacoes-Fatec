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
						<form action="provas/pdf" method="get" style="display: inline-block;">
							<button type="submit" value='{{$avaliacao->pdf_nome}}' name="verProva" class="btn btn-success verPdf">Download Prova</button>
						</form>
						
						<button class="btn btn-danger" id='{{$avaliacao->id}}'>Cancelar Agendamento</button>
						
					</td>
				</tr>
				@empty
					<h4 style="text-align: center;">Nenhuma matéria agendada até o momento</h4>
				@endforelse
				
				
			</table>
		</div>
	</div>
</div>

<style type="text/css">
	th, td{text-align: center}
</style>

@endsection