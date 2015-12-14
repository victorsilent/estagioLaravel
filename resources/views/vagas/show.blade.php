@extends('index')
@section('content')
	<div class="container" id="vagas">
		<div class="row">
			<div class="col-md-3">
					<div class="panel panel-default">
					  <div class="panel-body">
					    <div class="form-group">
					    {!! Form::open(['url' => 'home']) !!}

						    	{!! Form::label('title','Seleciona uma área:') !!}
						    	{!! Form::select('area',array(
							    	'Saude' => 'Saude',
							    	'Humanas' => 'Humanas',
							    	'Exatas' => 'Exatas',
							    	'Biológicas' => 'Biológicas'),
						    	 null,
						    	 array('class' => 'form-control')); !!}


						    	{!! Form::label('title','Semestre:') !!}
						    	{!! Form::select('semestre',array(
							    	false => 'Qualquer',
							    	'1' => '1', 
							    	'2' => '2',
							    	'3' => '3',
							    	'4' => '4'),
						    	null,
						    	array('class' => 'form-control')); !!}

						    	{!! Form::label('auxilio','Valor do auxílio:') !!}
						    	{!! Form::select('auxilio',array(
							    	false => 'Qualquer',
							    	'400' => 'R$ 400', 
							    	'800' => 'R$ 800',
							    	'1000' => 'R$ 1000',
							    	'1200' => 'R$ 1200'),
						    	null,
						    	array('class' => 'form-control')); !!}

						    	{!! Form::label('title','Carga horária:') !!}
						    	{!! Form::select('horas',array(
							    	false => 'Qualquer',
							    	'12' => '12h', 
							    	'20' => '20h',
							    	'30' => '30h'),
						    	null,
						    	array('class' => 'form-control')); !!}

								<hr><!-- Quebra de linha -->

						    	{!! Form::submit('Filtrar',['class'=>'btn btn-primary form-control']) !!}
					    {!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
			@foreach($vagas as $vaga)

				<div class="panel panel-default">
					<div class="panel-heading"><h4>{{$vaga->titulo}} - {{$vaga->nome_empresa}} </h4>
						<div class="text-muted">Auxilio: R${{$vaga->auxilio}}  | Carga horaria: {{$vaga->carga_horaria}}h</div>
					</div>
					<div class="panel-body">
						
						<p>
							{!! nl2br(e($vaga->corpo)) !!}
						</p>
						
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@stop