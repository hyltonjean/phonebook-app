@extends('layouts.app')

@section('content')
<a class="btn btn-outline-primary mt-3" href="/contact/{{$contact->id}}">Go Back</a>
<h1 class="my-3">Edit contact</h1>
{!! Form::open(['action' => ['PhonebookController@update', $contact->id], 'method' => 'POST']) !!}
{{ Form::bsText('name', $contact->name) }}
{{ Form::bsText('number', $contact->number) }}
{{ Form::hidden('_method', 'PUT') }}
{{ Form::bsSubmit('Submit', ['class' => 'btn btn-outline-success']) }}
{!! Form::close() !!}
@endsection
