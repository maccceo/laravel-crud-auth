@extends('layouts.baseLayout')

@section('content')

<form action="{{ route('catAuth.update', $cat -> id) }}" method="post">
	@csrf
	@method('PUT')
	<label for="name">Nome:</label>
	<input type="text" name="name" value="{{ $cat -> name }}">
	<br>
	<label for="race">Razza:</label>
	<input type="text" name="race" value="{{ $cat -> race }}">
	<br>
	<label for="cat_rfid">Codice identificativo:</label>
	<input type="text" name="cat_rfid" value="{{ $cat -> cat_rfid }}">
	<br>
	<input type="submit" value="Invia modifica">
</form>
	
	
	<a href="{{ route('cat.index') }}">Torna alla homepage</a>
</div>

@endsection
