@extends('layouts.app')

@section('content')
<a class="btn btn-outline-primary mt-3" href="/">Go Back</a>
<h1 class="text-center">Contact Details</h1>
<h4 class="pt-4">{{$contact->name}}</h4>
<hr>
<h5>{{$contact->number}}</h5>
<br>
<a href="/contact/{{$contact->id}}/edit" class="btn btn-outline-dark">Edit</a>
{!! Form::open(['action' => ['PhonebookController@destroy', $contact->id], 'method' => 'POST', 'class' =>
'float-lg-right']) !!}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger', 'onclick' => 'return confirm("Are you sure?")']) }}
{!! Form::close() !!}
@endsection
