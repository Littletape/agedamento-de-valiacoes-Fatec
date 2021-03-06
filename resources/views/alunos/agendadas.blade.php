@extends("alunos.header")

@section("conteudo")

<div class="row">

		@if(isset($_GET['erro']))
			
				@if($_GET['erro'] == 1)
					<div class="alert alert-danger">
						<center><h5><b>O pdf desta prova ainda não está cadasrado no sistema, solicite ao professor responsável</b></h5></center>
					</div>
				@else
					<div class="alert alert-danger">
						<center><h5><b>Acesso negado, você só poderá fazer download da avaliação após o data definida no calendário</b></h5></center>
					</div>
				@endif
			
		@endif

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
					<td>{{$avaliacao->nome}}</td><td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $avaliacao->data)->format('d-m-Y') }}</td>
					<td>
						<form action="{{route('verProva')}}" method="POST" style="display: inline-block;">
						{!!csrf_field()!!}
							<button type="submit" value='{{$avaliacao->pdf_nome}}' name="verProva" class="btn btn-success verPdf glyphicon glyphicon-download"></button>
							<input type="hidden" name="idAva" value="{{$avaliacao->id}}">
							<input type="hidden" name="pdf_nome" value="{{$avaliacao->pdf_nome}}">
						</form>
						
						<button class="btn btn-danger glyphicon glyphicon-trash rmAgen" id='{{$avaliacao->id}}'></button>
						
					</td>
				</tr>
				@empty
					<h4 style="text-align: center;">Nenhuma matéria agendada até o momento</h4>
				@endforelse
				
				
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	$(document).on('click','.rmAgen',function(){
		// vierifica quais checkbox foram selecionados
		var env = {};
		env.materia_id = $(this).attr('materia_id');
		env.id = $(this).attr('id');
		env.status = 'false';

		
		console.log(env);
		// envia o array com os chekbox por get
		$.get('/agendar/'+env.materia_id+'/'+env.id+'/'+env.status, function(env){
			if(env == true){
			alert('Agendamento realizado com sucesso');
		}else{
			alert('Agendamento removido com sucesso');
			location.reload();
		}
			
		});	

	});
</script>

<style type="text/css">
	th, td{text-align: center}
</style>

@endsection