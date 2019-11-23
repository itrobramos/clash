@extends('layouts.app')

@section('content')

<h1>{{ $Modo =='create' ? 'Add speed': 'Edit speed'}}</h1>

<label for="Name">{{'Name'}}</label>

<input type ='text' name='Name' id='Name' value = '{{ isset($speed->name)?$speed->name:""}}' class='form-control'>
<br>
<a href="{{ url('speed')}}"><button class='btn btn-md btn-primary'>Back</button></a>

<input type ='submit' value="{{ $Modo =='create' ? 'Add': 'Edit'}}" class='btn btn-md btn-success'/>
@endsection