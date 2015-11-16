@extends('index')

@section('content')
	<div class="container">
		<h1>Adicionar nova vaga</h1>
		<hr>
		{!! Form::open(['url' => 'vagas']) !!}

			<div class="form-group">
		    	{!! Form::label('nome_empresa','Nome da empresa:') !!}
		    	{!! Form::text('nome_empresa',null,['class'=>'form-control']) !!}
	    	</div>

			<div class="form-group">
		    	{!! Form::label('titulo','Titulo:') !!}
		    	{!! Form::text('titulo',null,['class'=>'form-control']) !!}
	    	</div>

	    	<div class="form-group">
		    	{!! Form::label('min_salario','Min Salario:') !!}
		    	{!! Form::text('min_salario',null,['class'=>'form-control']) !!}
	    	</div>

	    	<div class="form-group">
		    	{!! Form::label('max_salario','Max Salario:') !!}
		    	{!! Form::text('max_salario',null,['class'=>'form-control']) !!}
	    	</div>

	    	<div class="form-group">
		    	{!! Form::label('corpo','Descrição:') !!}
		    	{!! Form::textarea('corpo',null,['class'=>'form-control']) !!}
	    	</div>
	
	    	<div class="form-group">
		    	{!! Form::label('publicacao','Published On:') !!}
		    	{!! Form::input('date','publicacao',Carbon\Carbon::now()->format('d-m-Y H:i:s'),['class'=>'form-control']) !!}
	    	</div>



	    	<div class="form-group">
		    	{!! Form::submit('Add article',['class'=>'btn btn-primary form-control']) !!}
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