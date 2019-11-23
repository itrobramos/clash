@extends('layouts.app')

@section('content')

<h1>{{ $Modo =='create' ? 'Add type': 'Edit type'}}</h1>

<label for="Name">{{'Name'}}</label>

<input type ='text' name='Name' id='Name' value = '{{ isset($type->name)?$type->name:""}}' class='form-control'>
<br>
<a href="{{ url('type')}}" class='btn btn-md btn-primary'>Back</a>

<input type ='submit' value="{{ $Modo =='create' ? 'Add': 'Edit'}}" class='btn btn-md btn-success'/>
@endsection