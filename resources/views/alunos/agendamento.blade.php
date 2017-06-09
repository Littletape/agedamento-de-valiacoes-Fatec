@extends("alunos.header")

@section("conteudo")

<div class="row">
	<h2><center>Agendamento de Avaliações</center></h2>
	<h3><center>Curso: Gestão empresarial</center></h3>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1 col-xs-12">
		
		
		<div class="panel panel-primary">
			
			<div class="panel-heading"><center><b>{{$semestre}}º Semestre</b></center></div>
			<table class="table table-striped">

				@forelse($semanas as $semana)
				<th colspan="{{$aval->count()}}">Semana {{$semana->semana}}</th>
				

				<tr style="background-color: white">
					@forelse($aval as $key => $avaliacoes)
					@if($semana->id == $avaliacoes->semana_id and $semestre == $avaliacoes->semestre_id )
					
					@if($key < 1)
					<td>
						<table class="table">
							<th>{{$avaliacoes->data}}</th>
							<tr><td>{{$avaliacoes->dia}}</td></tr>
							@foreach($aval as $indice => $info)
							@if($avaliacoes->data == $info->data)
							@if($info->avaAgendada_id != '' and $info->materiaAgendada == $info->materia_id and $info->usuario_id == $idUsu)
							<tr><td>{{$info->materia}} <span><input style="float: right;" type="checkbox" id="{{$info->id}}" materia_id="{{$info->materia_id}}" class="agendar" checked="true"   name="materia"></span></td></tr>

							@else
							<tr><td>{{$info->materia}} <span><input style="float: right;" type="checkbox" id="{{$info->id}}" materia_id="{{$info->materia_id}}" class="agendar"  name="materia"></span></td></tr>
							@endif
							@endif
							@endforeach
						</table>
					</td>
					@elseif($aval[$key - 1]->data != $avaliacoes->data)
					<td>
						<table class="table">
							<th>{{$avaliacoes->data}}</th>
							<tr><td>{{$avaliacoes->dia}}</td></tr>
							@foreach($aval as $indice => $info)
							@if($avaliacoes->data == $info->data)
							@if($info->avaAgendada_id != '' and $info->materiaAgendada == $avaliacoes->materia_id and $info->usuario_id == $idUsu)
							<tr><td>{{$info->materia}} <span><input style="float: right;" type="checkbox" id="{{$info->id}}" materia_id="{{$info->materia_id}}" class="agendar" checked="true"  name="materia"></span></td></tr>

							@else
							<tr><td>{{$info->materia}} <span><input style="float: right;" type="checkbox" id="{{$info->id}}" materia_id="{{$info->materia_id}}" class="agendar"   name="materia"></span></td></tr>
							@endif
							@endif
							@endforeach
						</table>
					</td>	
					@endif
					
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
			if(env == true){
			alert('Agendamento realizado com sucesso');
		}else{
			alert('Agendamento removido com sucesso');
		}
			
		});	

	});
</script>

@endsection