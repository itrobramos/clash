@extends('layouts.app')

@section('content')

<h1>{{ $Modo =='create' ? 'Add target': 'Edit target'}}</h1>

<label for="Name">{{'Name'}}</label>

<input type ='text' name='Name' id='Name' value = '{{ isset($target->name)?$target->name:""}}' class='form-control'>
<br>
<a href="{{ url('target')}}" class='btn btn-md btn-primary'>Back</a>

<input type ='submit' value="{{ $Modo =='create' ? 'Add': 'Edit'}}" class='btn btn-md btn-success'/>
@endsection