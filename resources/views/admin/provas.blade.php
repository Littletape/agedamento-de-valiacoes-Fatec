@extends("admin.header")

@section("conteudo")

	
<form action="{{route('cadAvaliacao')}}" method="POST" accept-charset="utf-8">
{!!csrf_field()!!}
	<div class="row">
		@if(isset($_GET['msg']))
			
				@if($_GET['msg'] == 1)
					<div class="alert alert-success">
						<center><h5>Avaliação cadastrada com sucesso</h5></center>
					</div>
				@else
					<div class="alert alert-success">
						<center><h5>Erro ao cadastrar avalicão</h5></center>
					</div>
				@endif
			
		@endif
		<div class="col-md-3 col-md-offset-2 col-xs-12">
			<label>Selecione o Curso:</label>
			<select name='curso_id' required class="form-control" placeholder='Selecione o Curso'>
				@forelse($cursos as $curso)
				<option value='{{$curso->id}}'>{{$curso->nome}}</option>
				@empty
					<option>Nenhum curso cadastrado</option>
				
				@endforelse
			</select>	
			</select>
		</div>
		<div class="col-md-3 col-xs-12">
			<label>Selecione o semestre:</label>
			<select name="semestre_id" required class="form-control" placeholder='Selecione o Curso'>
				@forelse($semestres as $semestre)
				<option value="{{$semestre->id}}" >{{$semestre->semestre}}</option>
				@empty
					<option>Nenhum semestre cadastrado</option>
				
				@endforelse
			</select>	
		</div>

		<div class="col-md-2 col-xs-12">
			<label>Selecione a semana:</label>
			<select name="semana_id" required class="form-control" placeholder='Selecione o Curso'>
				@forelse($semanas as $semana)
				<option value="{{$semana->id}}">{{$semana->semana}}</option>
				@empty
					<option>Nenhuma semana cadastrada</option>
				
				@endforelse
			</select>	
		</div>
	</div><br>

	<div class="row">
		<div class="col-md-8 col-md-offset-2"><label>Insira aqui a data da prova:</label></div>
		<div class="col-md-2 col-md-offset-2"><input required type="date" name="data" class="form-control"></div>
		<div class="col-md-2">
			<select name="dia" class="form-control">
				<option>Segunda-Feira</option>
				<option>Terça-Feira</option>
				<option>Quarta-Feira</option>
				<option>Quinta-Feira</option>
				<option>Sexta-Feira</option>
				<option>Sabado</option>
			</select>
		</div>
		<div class="col-md-3">
			<select name="materia_id" class="form-control">
				<option value="1">Materia 1</option>
				
			</select>
		</div>
		<div class="col-md-1"><input type="submit" name="busca" class="btn btn-success" value="Salvar"></div>
	</div><br>
</form>

<div class="row">
	<div class="col-md-10 col-md-offset-1 col-xs-12">
		
		<div class="col-md-10 col-md-offset-1 col-xs-12">

		@forelse($semestres as $semestre)	
			<div class="panel panel-primary">

				<div class="panel-heading"><center><b>{{$semestre->semestre}}º Semestre</b></center></div>
				<table class="table table-striped">

					@forelse($semanas as $semana)
					<th colspan="{{$aval->count()}}">Semana {{$semana->semana}}</th>


					<tr style="background-color: white">
						@forelse($aval as $key => $avaliacoes)
						@if($semana->id == $avaliacoes->semana_id and $semestre->semestre == $avaliacoes->semestre_id )

						@if($key < 1)
						<td>
							<table class="table">
								<th>{{$avaliacoes->data}}</th>
								<tr><td>{{$avaliacoes->dia}}</td></tr>
									@foreach($aval as $indice => $info)
										@if($avaliacoes->data == $info->data and $info->semana == $avaliacoes->semana and $info->semestre == $avaliacoes->semestre)
										
											<tr><td>{{$info->nome}}</td></tr>
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
										@if($avaliacoes->data == $info->data and $info->semana == $avaliacoes->semana and $info->semestre == $avaliacoes->semestre)
										
											<tr><td>{{$info->nome}}</td></tr>
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
		@empty
		<tr><td>Não tem avaliação cadastrado nessa semana</td></tr>
		@endforelse	

		</div>	
		
	</div>	
</div>

<style type="text/css">
	th, td{text-align: center}
	.form-control{border-color: grey;}
	td>input{width: 20px; height: 20px}
</style>

@endsection