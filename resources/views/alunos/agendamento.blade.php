@extends("alunos.header")

@section("conteudo")
<div class="row">
	<h1><center>Agendamento de Avaliações</center></h1>
</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12">
		<form>
			<div class="panel panel-primary">
				<div class="panel-heading"><center><b>Semestre XX</b></center></div>
				<table class="table table-striped">
					@forelse($semanas as $semana)
					<th colspan="4">Semana {{$semana->semana}}</th>
						
							<tr>
							@forelse($aval as $avaliacoes)
							<td>
							<table class="table">
									
									<th>{{$avaliacoes->data}}</th>
									<tr><td>{{$avaliacoes->dia}}</td></tr>
									<tr><td>{{$avaliacoes->materia1}}</td></tr>
									<tr><td>{{$avaliacoes->materia2}}</td></tr>
									
							</table>
							</td>		
							@empty
							<h2>Nenhuma avaliação cadastrada até o momento</h2>
							@endforelse
							</tr>
						

					@empty
					<h2>Nenhuma avaliação cadastrada até o momento</h2>
					@endforelse
					
					
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