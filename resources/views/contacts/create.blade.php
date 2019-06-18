@extends('layouts.app')

@section('content')
<h1 class="my-3">Create Contact</h1>
{!! Form::open(['action' => 'PhonebookController@store', 'method' => 'POST']) !!}
{{ Form::bsText('name') }}
{{ Form::bsText('number') }}
{{ Form::bsSubmit('Submit', ['class' => 'btn btn-outline-success']) }}
{!! Form::close() !!}
@endsection
