@extends('index')
@section('content')
	<div class="container" id="vagas">
		<div class="row">
			<div class="col-md-3">
					<div class="panel panel-default">
					  <div class="panel-body">
					    <div class="form-group">
							<label for="sel1">Selecione a sua área</label>
							<select class="form-control" id="sel1">
								<option>Saude</option>
								<option>Humanas</option>
								<option>Exatas</option>
								<option>Loucuras</option>
							</select>

							<label for="sel1">Semestre</label>
							<select class="form-control" id="sel1">
								<option>Qualquer</option>
								<option>4+</option>
								<option>5+</option>
								<option>2 para conclusão</option>
							</select>

							<label for="sel1">Média Salarial</label>
							<select class="form-control" id="sel1">
								<option>R$ 600</option>
								<option>R$ 600</option>
								<option>R$ 600</option>
								<option>R$ 600</option>
							</select>

							<label for="sel1">Carga horária</label>
							<select class="form-control" id="sel1">
								<option>20h</option>
								<option>25h</option>
								<option>30h</option>
								<option>35h</option>
							</select>

							<label for="sel1">Outros</label>
							<select class="form-control" id="sel1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<hr>
							<button type="submit" class="btn btn-default form-control">Filtrar</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
			@foreach($vagas as $vaga)
				<div class="panel panel-default">
					<div class="panel-heading"><h4>{{$vaga->titulo}} - {{$vaga->nome_empresa}} </h4></div>
					<div class="panel-body">
						<div class="text-muted">R$ {{$vaga->min_salario}} ~ R$ {{$vaga->max_salario}}</div>
						<p>
							{!! nl2br(e($vaga->corpo)) !!}
						</p>
						<ul class="nav nav-pills">
							<li role="presentation"><a href="#">PHP</a></li>
							<li role="presentation"><a href="#">SOLID</a></li>
							<li role="presentation"><a href="#">Laravel</a></li>
						</ul>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@stop