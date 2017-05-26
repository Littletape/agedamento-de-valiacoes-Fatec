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
													@if($avaliacoes->avaAgendada_id != '' and $avaliacoes->materiaAgendada == $avaliacoes->materia_id and $avaliacoes->usuario_id == $idUsu)

													<tr><td>{{$avaliacoes->materia1}} <span><input style="float: right;" type="checkbox" id="{{$avaliacoes->id}}" materia_id="{{$avaliacoes->materia_id}}" class="agendar" checked="true" name="materia1"></span></td></tr>
													@else
														<tr><td>{{$avaliacoes->materia1}} <span><input style="float: right;" type="checkbox" id="{{$avaliacoes->id}}" materia_id="{{$avaliacoes->materia_id}}" class="agendar"  name="materia1"></span></td></tr>
													@endif
												@endif

												@if($avaliacoes->materia2 != '')
												@if($avaliacoes->avaAgendada_id != '' and $avaliacoes->materiaAgendada == $avaliacoes->materia2_id and $avaliacoes->usuario_id == $idUsu)

													<tr><td>{{$avaliacoes->materia2}} <span><input style="float: right;" type="checkbox" id="{{$avaliacoes->id}}" materia_id="{{$avaliacoes->materia2_id}}" class="agendar" checked="true" name="materia2"></span></td></tr>
													@else
														<tr><td>{{$avaliacoes->materia2}} <span><input style="float: right;" type="checkbox" id="{{$avaliacoes->id}}" materia_id="{{$avaliacoes->materia2_id}}" class="agendar"  name="materia2"></span></td></tr>
													@endif
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

<script type="text/javascript">
	
	$(document).on('click','.agendar',function(){
		// vierifica quais checkbox foram selecionados
		var env = {};
		env.materia_id = $(this).attr('materia_id');
		env.id = $(this).attr('id');
		env.status = $(this).is(":checked");
		console.log(env);
		// envia o array com os chekbox por get
		$.get('/agendar/'+env.materia_id+'/'+env.id+'/'+env.status, function(env){
			console.log('sucesso');
		});	

	});
</script>

@endsection