@extends('layouts.app')
@section('title', 'Locaties')

@section('title')
	Bewerk {{ $location->name }}
@endsection

@section('content')
{!! Form::model($location, ['route' => ['location.update', $location->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
		<div class="col-sm-6">
			{!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam hier']) !!}
		</div>

	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-primary">
				Opslaan
			</button>
		</div>
	</div>
{!! Form::close() !!}

@endsection
