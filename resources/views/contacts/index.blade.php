@extends('layouts.app')

@section('content')
<h1 class="text-center my-3">Phonebook App</h1>
@if(count($contacts) > 0)
@foreach($contacts as $contact)
<ul class="list-group list-group-flush">
	<li class="list-group-item">
		<a href="contact/{{$contact->id}}">{{ $contact->name }}</a>
	</li>
</ul>
@endforeach
@endif
<div class="pagination justify-content-center mt-3">
	{{ $contacts->links() }}
</div>
@endsection
