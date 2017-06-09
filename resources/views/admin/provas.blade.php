@extends("admin.header")

@section("conteudo")
<!-- Modal -->
		<div id="modalPdf" class="modal fade" role="dialog" tabindex="1">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Selecione o PDF</h4>
					</div>
					<div class="modal-body">
						<form id="formPdf" action="{{route('uploadPdf')}}" method="POST" enctype="multipart/form-data">
						{!!csrf_field()!!}
							<div class="input-group">
								<div class="col-md-10">
		      					<div class="input-group-btn">
									<input class="form-control" type="file" name="pdf">
									<button class="btn btn-primary savePdf" type="submit" name="enviar">Enviar</button>
									<input id="insertPdf" type="hidden" value="" name="idAva">
								</div>
								</div>
							</div>		
						</form>
					</div>
					

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						
					</div>
				</div>

			</div>
		</div>
	
<form action="{{route('cadAvaliacao')}}" method="POST" accept-charset="utf-8">
{!!csrf_field()!!}
	<div class="row">
	
		<!-- Fim Modal -->


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
				@forelse($materias as $materia)
				<option value="{{$materia->id}}">{{$materia->nome}}</option>
				@empty
					<option>Nenhuma materia cadastrada</option>
				
				@endforelse
				
			</select>
		</div>
		<div class="col-md-1"><button type="submit" name="busca" class="btn btn-success glyphicon glyphicon-ok"></button></div>
	</div><br>
</form>

<div class="row">
	<div class="col-md-10 col-md-offset-1 col-xs-12">
		
		@forelse($semestres as $semestre)
		<div class="panel panel-primary">
			
			<div class="panel-heading"><center><b>{{$semestre->id}}º Semestre</b></center></div>
			<table class="table table-striped">

				@forelse($semanas as $semana)
				<th colspan="{{$aval->count()}}">Semana {{$semana->semana}}</th>
				

				<tr style="background-color: white">
					@forelse($aval as $key => $avaliacoes)
						@if($semana->id == $avaliacoes->semana_id)
						
							@if($key < 1)
								<td>
									<table class="table">
									
										<th colspan="2">{{$avaliacoes->data}}</th>
										<tr><td>{{$avaliacoes->dia}}</td></tr>
									
											@foreach($aval as $indice => $info)
												@if($avaliacoes->data == $info->data and $info->semestre_id == $semestre->id)
													<tr>
														<td>{{$info->materia}}</td>
														<td>
															<div class="btn-group">
															  <button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-menu-hamburger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															   <span class="caret"></span>
															  </button>
															  <ul class="dropdown-menu subIten">
															    <li><a id="{{$info->id}}" class="editMat" materiaId="{{$info->materia_id}}" materia="{{$info->materia}}">Editar</a></li>
															    <li><a id="{{$info->id}}" class="delAva">Excluir</a></li>
															    <li><a id="{{$info->id}}" class="envPdf">Cadastrar PDF</a></li>
															  
															  </ul>
															</div>
														</td>
													</tr>
													
												@endif
											@endforeach
									</table>
								</td>
								@elseif($aval[$key - 1]->data != $avaliacoes->data)
								<td>
									<table class="table">
									
										<th colspan="2">{{$avaliacoes->data}}</th>
										<tr><td>{{$avaliacoes->dia}}</td></tr>
									

											@foreach($aval as $indice => $info)
												@if($avaliacoes->data == $info->data and $info->semestre_id == $semestre->id) 
													<tr>
														<td>{{$info->materia}}</td>
														<td>
															<div class="btn-group">
															  <button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-menu-hamburger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															   <span class="caret"></span>
															  </button>
															  <ul class="dropdown-menu subIten">
															    <li><a id="{{$info->id}}" class="editMat" materia="{{$info->materia}}" materiaId="{{$info->materia_id}}">Editar</a></li>
															    <li><a id="{{$info->id}}" class="delAva">Excluir</a></li>
															  	<li><a id="{{$info->id}}" class="envPdf">Cadastrar PDF</a></li>
															  </ul>
															</div>
														</td>
													</tr>

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



<script type="text/javascript">
	
	$(document).on('click','.delAva',function(){
		// vierifica quais checkbox foram selecionados
		var env = {};
		env.id = $(this).attr('id');

		var mae = $(this).parent().parent().parent().parent().parent();
		
		console.log(mae);

		var resposta = confirm('Clique em OK para confirmar a exclusão');

		if(resposta == true ){
			// envia o array com os chekbox por get
			$.get('/excluir/avaliacao/'+env.id, function(env){
				if(env == true && env == 'erro'){
					alert('Ocorreu um erro ao excluir a avaliação, operação cancelada');
				}else{
					console.log(env);
					mae.html(' ');
				}
				
				
			});	
		}

		

	});
</script>

<script type="text/javascript">
	$(document).on('click','.editMat', function(){
		console.log('teste');
		var materia = $(this).attr('materia');
		var materia_id = $(this).attr('materiaId');
		var id = $(this).attr('id');
		var option = ' ';

		var pai = $(this).parent().parent().parent().parent().parent();
		pai.html(' ');	
			$.get('/buscar/materias', function(materias){
				$.each(materias, function(key,value){
					console.log()
					option+= '<option value="'+value['id']+'">'+value['nome']+'</option>';	
				});

				pai.append('<td><select class="form-control">'+option+'</select></td><td><button id="'+id+'" materia="'+materia+'" materiaId="'+materia_id+'" class="btn btn-success glyphicon glyphicon-floppy-saved salvarMat"></button></td>');										
			});

			

		
		

	});
</script>

<script type="text/javascript">
	$(document).on('click','.salvarMat', function(){
		var materia = $(this).attr('materia');
		var id = $(this).attr('id');
		tr = $(this).parent().parent();
		var select = tr.find( "select" );
		var materia_id = select.val();
		// envia o id da materia pra fazer a atualziação
			$.get('/editar/materia/'+id+'/'+materia_id, function(env){
					if(env == '1'){
						location.reload();
					}else{
						alert('Ocorreu um erro ao editar, favor informar os desenvolvedores do sistema');
					}
									
			});	
			
	});
</script>

<script type="text/javascript">
	$(document).on('click','.envPdf', function(){
		var id = $(this).attr('id');
		$('#insertPdf').val(id);
		$('#modalPdf').modal();
	});
</script>

<style type="text/css">
	th, td{text-align: center}
	.form-control{border-color: grey;}
	td>input{width: 20px; height: 20px}
	.subIten+li{
		padding-left:20px;
	}
	.subIten+li:hover{
		background-color: #f5f8fa;
	}
	.modal-backdrop{z-index: -1;}
</style>

@endsection