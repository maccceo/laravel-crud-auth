@extends('layouts.baseLayout')

@section('content')

<div class="cat_show">
	<h2>{{ $cat -> name }}</h2>
	<p>Razza: {{ $cat -> race }}</p>
	<p>Codice identificativo: {{ $cat -> cat_rfid }}</p>
	@guest
	@else
	<a href="{{ route('catAuth.edit', $cat -> id) }}">MODIFICA</a>
	<a href="{{ route('catAuth.delete', $cat -> id) }}">CANCELLA</a>
	<br>
	@endguest
	<a href="{{ route('cat.index') }}">Torna alla homepage</a>
</div>

@endsection
