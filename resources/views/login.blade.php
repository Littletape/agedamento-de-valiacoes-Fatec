@extends('template')
@section('conteudo')

<div class="container">
	<br><br><br>
	<div>
		<div class="row">
			<center><img src="/images/fatec_logo.png" width="25%" title="Logo da Fatec de Jaboticabal"></center>
		</div><br>

		<form type="post" method="post" action="{{url('/login')}}">
		{!!csrf_field()!!}

		<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			<input type="email" name="email" id="email" placeholder="E-mail" class="form-control">

		</div>
		</div><br>

		<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			<input type="senha" name="senha" id="senha" placeholder="Senha" class="form-control">
			@if( $erro == 1)
			<br>
			<p class="alert alert-danger">E-mail não cadastrado</p>
			@endif
			@if( $erro == 2)
			<br>
			<p class="alert alert-danger">Senha incorreta</p>
			@endif

		</div>
		</div><br>

		<div class="row">
		<div class="col-xs-12 col-md-2 col-md-offset-5">
			<button type="submit" class="btn btn-success col-xs-12 col-md-12">Entrar</button>
		</div>
		</div><br>

		</form>
	</div>
	
</div>
@endsection

<style type="text/css">
	.form-control{border-color: grey;}
</style>