@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
		{{$book->title}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('BookController@edit', $book->id)}}">Bewerken</a>
	</div>
		<script>
			function confirmDelete() {
		var result = confirm('Weet je zeker dat je dit boek wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
			</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['book.destroy', $book->id], 'onsubmit' => 'return confirmDelete()']) !!}
	<button type="submit" name="button" class="btn btn-default btn-sm">
			<i class="fa fa-trash-o"></i>
	</button>
	</div>
</div>
@endsection

@section('content')
    <div class="col-xs-12">
        <h2>Informatie over dit boek:</h2>
            <table class="table table-striped table-hover">
                <thead>
                <th class="col-sm-2">ISBN</th>
                <th class="col-sm-3">Titel</th>
                <th class="col-sm-3">Auteur</th>
								<th class="col-sm-3">Categorie</th>
                </thead>
                <tbody>
                <tr class="row-link" style="cursor: pointer;"
                    data-href="{{action('BookController@show', ['id' => $book->id]) }}">
                    <td class="table-text">{{ $book->isbn }}</td>
                    <td class="table-text">{{ $book->title }}</td>
                    <td class="table-text">{{ $book->author }}</td>
										<td class="table-text">
											@if (isset($book->category))
												{{ $book->category->name }}

											@endif
										</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-12">
            <h2>Exemplaren van dit boek:</h2>
            @if($book->copies != null)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nummer</th>
                            <th>Staat van het exemplaar</th>
                            <th>Locatie</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($book->copies as $copy)
                        <tr>
                            <td> {{$copy->id}} </td>
                            <td> {{$copy->state}} </td>
                            <td> {{$copy->location->name}} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Er zijn geen exemplaren gevonden!</p>
            @endif
        </div>
    </div>
@endsection
