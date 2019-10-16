@extends('layouts.baseLayout')

@section('content')

<form action="{{ route('catAuth.store') }}" method="post">
	@csrf
	@method('POST')
	<label for="name">Nome:</label>
	<input type="text" name="name">
	<br>
	<label for="race">Razza:</label>
	<input type="text" name="race">
	<br>
	<label for="cat_rfid">Codice identificativo:</label>
	<input type="text" name="cat_rfid">
	<br>
	<input type="submit" value="Invia modifica">
</form>
	
	
	<a href="{{ route('cat.index') }}">Torna alla homepage</a>
</div>

@endsection
