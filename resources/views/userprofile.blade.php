@extends('layouts.app')
@section('pagetitle', 'Gebruikersprofiel')

@section('title')
	<i class="fa fa-user"></i> {{ Auth::user()->name }}
@endsection

@section('content')

<!-- User Info -->
<table class="table">
	<tbody>
		<tr>
			<td>Naam</td>
			<td>{{ Auth::user()->name }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{ Auth::user()->email }}</td>
		</tr>
	</tbody>
</table>

@endsection
