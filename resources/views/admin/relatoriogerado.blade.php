<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Relatório</title>
</head>
<body>

<center>
	<h1 style="color: blue;">Relatório</h1>
	<h3>Data: {{date("Y-m-d")}} &nbsp; &nbsp; Horario: {{date("H:i:s")}}</h3>
</center>

<table align="center">
<tr style="background-color: blue; color: white;">
<th>&nbsp; N° &nbsp;</th>
<th>&nbsp; Data &nbsp;</th>
<th>&nbsp; Sem. &nbsp;</th>
<th>&nbsp; Materia &nbsp;</th>
@if($qtd == 1)
<th>&nbsp; Qtd. &nbsp;</th>
@else
<th>&nbsp; Nome do Aluno &nbsp;</th>
@endif
</tr>

@foreach($resultado as $resultados)
<tr>
	<td>{{$n = $n+1}}</td>
	<td>{{$resultados->data}}</td>
	<td>{{$resultados->semestre}}</td>
	<td>{{$resultados->materia}}</td>
	@if($qtd == 1)
	<td>Teste</td>
	@else
	<td>{{$resultados->nome}}</td>
	@endif
</tr>
@endforeach

</body>

<style type="text/css">
	td{text-align: center; background-color: rgb(211,211,211);}
</style>
</html>