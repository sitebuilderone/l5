@extends('app')
@section('content')

about.blade.php
<HR>
View should not interact within database

{{-- Conditionals 

if ($name == 'Tony')
	<h2>Hello Tony</h2>
	@else
	<h2>Hi Else!</h2>
@endif

--}}


{{-- Loop from array from controller --}}

@if (count($people))
	<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach
	</ul>
@endif


@stop
