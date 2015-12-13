@extends('index')

@section('content')
	<div class="container">
		<h1>Adicionar nova vaga</h1>
		<hr>
		
		{!! Form::open(['url' => 'vagas']) !!}
			<div class="form-group">
		    	{!! Form::label('nome_empresa','Nome da empresa:') !!}
		    	{!! Form::text('nome_empresa',null,['class'=>'form-control']); !!}

		    	{!! Form::label('titulo','Titulo:') !!}
		    	{!! Form::text('titulo',null,['class'=>'form-control']); !!}

		    	{!! Form::label('corpo','Descrição:') !!}
		    	{!! Form::textarea('corpo',null,array('class' => 'form-control')); !!}
				
				{!! Form::label('area','Area:') !!}
		    	{!! Form::select('area',array(
			    	'Saude' => 'Saude', 
			    	'Humanas' => 'Humanas',
			    	'Exatas' => 'Exatas',
			    	'Biológicas' => 'Biológicas'),
		    	null,
		    	array('class' => 'form-control')); !!}

		    	{!! Form::label('semestre','Semestre') !!}
		    	{!! Form::select('semestre',array(
			    	'1' => '1', 
			    	'2' => '2',
			    	'3' => '3',
			    	'4' => '4'),
		    	null,
		    	array('class' => 'form-control')); !!}

		    	{!! Form::label('auxilio','Auxilio:') !!}
		    	{!! Form::text('auxilio',null,array('class' => 'form-control')); !!}

		    	{!! Form::label('horas','Carga horária:') !!}
		    	{!! Form::select('carga_horaria',array(
			    	'12' => '12h', 
			    	'20' => '20h',
			    	'30' => '30h'),
		    	null,
		    	array('class' => 'form-control')); !!}



		    	{!! Form::label('publicacao','Published On:',['class' => 'hidden']) !!}
		    	{!! Form::input('date','publicacao',Carbon\Carbon::now()->format('d-m-Y H:i:s'),['class'=>'form-control hidden']) !!}

		    	<hr>
		    	{!! Form::submit('Cadastrar Vaga',['class'=>'btn btn-primary form-control']) !!}
	    	</div>

		{!! Form::close() !!}

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif
	</div>

@stop