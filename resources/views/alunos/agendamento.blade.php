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
					@forelse($semanas as semana)

					@empty
					<h2>Nenhuma avaliação cadastrada até o momento</h2>
					@endforelse
					<td>
						<table> </table>
					</td>
					
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