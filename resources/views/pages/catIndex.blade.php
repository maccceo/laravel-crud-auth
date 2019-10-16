@extends('layouts.baseLayout')

@section('content')
@guest
@else
<a class="cat_create_button" href="{{ route('catAuth.create') }}">Crea nuovo gatto</a>
<br>
@endguest
@foreach($elements as $element)
<div class="cat">
	<a href="{{ route('cat.show', $element -> id) }}">{{ $element -> name }}</a>
</div>

@endforeach



@endsection
