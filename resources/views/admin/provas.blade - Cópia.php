@extends("admin.header")

@section("conteudo")

	
<form action="{{route('cadAvaliacao')}}" method="POST" accept-charset="utf-8">
{!!csrf_field()!!}
	<div class="row">

		<div class="modal fade" id="modalPdf" tabindex="1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Modal title</h4>
			      </div>
			      <div class="modal-body">
			        <p>One fine body&hellip;</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

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
						<tr><th>Curso</th><th>Data</th><th>dia</th><th>Materia</th><th>PDF</th><th colspan="2">Ações</th></tr>

					
						@forelse($aval as $key => $avaliacao)
						@if($semana->id == $avaliacao->semana_id and $semestre->semestre == $avaliacao->semestre_id )
							<tr style="background-color: white">
								<td>{{$avaliacao->nomeCurso}}</td>
								<td>{{$avaliacao->data}}</td>
								<td>{{$avaliacao->dia}}</td>
								<td>{{$avaliacao->nome}}</td>
								@if($avaliacao->pdf_nome == '')
								<td><span style="color: red" class="glyphicon glyphicon-thumbs-down"></span></td>
								<td>
									<button id='{{$avaliacao->id}}' class="btn btn-danger delAva glyphicon glyphicon-trash"></button>
								</td>
								<td>
									<button class="btn btn-primary envPdf" id='{{$avaliacao->id}}'>Enviar PDF</button>
								</td>
								@else
								<td>{{$avaliacao->pdf_nome}}</td>
								<td>
									<button id='{{$avaliacao->id}}' class="btn btn-danger delAva glyphicon glyphicon-trash"></button>
									
								</td>
								<td></td>
								@endif
								

							</tr>
						@endif
						
						@empty
						<tr><td>Não tem avaliação cadastrado nessa semana</td></tr>
						@endforelse
					

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

<script type="text/javascript">
	
	$(document).on('click','.delAva',function(){
		// vierifica quais checkbox foram selecionados
		var env = {};
		env.id = $(this).attr('id');

		var mae = $(this).parent().parent();
		
		console.log(mae);

		var resposta = confirm('Clique em OK para confirmar a exclusão');

		if(resposta == true ){
			// envia o array com os chekbox por get
			$.get('/excluir/avaliacao/'+env.id, function(env){
				if(env == true && env == 'erro'){
					alert('Ocorreu um erro ao excluir a avaliação, operação cancelada');
				}else{
					console.log(env);
					mae.css( "display", "none" );
				}
				
				
			});	
		}

		

	});
</script>

<script type="text/javascript">
	$(document).on('click','.envPdf', function(){
		console.log('teste');
		$('#modalPdf').modal();
	});
</script>

<style type="text/css">
	th, td{text-align: center}
	.form-control{border-color: grey;}
	td>input{width: 20px; height: 20px}
</style>

@endsection