@extends("alunos.header")

@section("conteudo")

<div class="row">
	<h1><center>Agendamento de Avaliações</center></h1>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1 col-xs-12">
		
		@forelse($semestres as $semestre)
			<div class="panel panel-primary">
				
					<div class="panel-heading"><center><b>Semestre {{$semestre->semestre}}</b></center></div>
						<table class="table table-striped">

							@forelse($semanas as $semana)
							<th colspan="{{$aval->count()}}">Semana {{$semana->semana}}</th>
							

							<tr style="background-color: white">
								@forelse($aval as $avaliacoes)
									@if($semana->id == $avaliacoes->semana_id and $semestre->id == $avaliacoes->semestre_id )
										
										<td>
											<table class="table">

												<th>{{$avaliacoes->data}}</th>
												<tr><td>{{$avaliacoes->dia}}</td></tr>
												@if($avaliacoes->materia1 != '')
												<tr><td>{{$avaliacoes->materia1}} <span><input style="float: right;" type="checkbox" name=""></span></td></tr>
												@else
												<tr><td>{{$avaliacoes->materia1}}</td></tr>
												@endif

												@if($avaliacoes->materia2 != '')
												<tr><td>{{$avaliacoes->materia2}} <span><input style="float: right;" type="checkbox" name=""></span></td></tr>
												@else
												<tr><td>{{$avaliacoes->materia2}}</td></tr>
												@endif
												
											</table>
										</td>
										
										
									@endif
									

								@empty
								<tr><td>Não tem avaliação cadastrado nessa semana</td></tr>
								@endforelse
							</tr>



							@empty
							<tr><td>Não tem avaliação cadastrado nessa semana</td></tr>
							@endforelse


						</table>

					</div>
		@empty
		<tr><td>Não tem avaliação cadastrado nessa semana</td></tr>
		@endforelse	
		
	</div>	
</div>

<style type="text/css">
	th, td{text-align: center}
	input{width: 20px; height: 20px;}
</style>

@endsection