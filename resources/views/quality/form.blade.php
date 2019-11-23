@extends('layouts.app')

@section('content')

<h1>{{ $Modo =='create' ? 'Add quality': 'Edit quality'}}</h1>

<label for="Name">{{'Name'}}</label>
<input type ='text' name='Name' id='Name' value = '{{ isset($quality->name)?$quality->name:""}}' class='form-control'>

<br>

<label for="Color">{{'Color'}}</label>
<input type ='color' name='Color' id='Color' value = '{{ isset($quality->cplor)?$quality->cplor:""}}' class='form-control'>
<br>

<a href="{{ url('quality')}}"><button class='btn btn-md btn-primary'>Back</button></a>
<input type ='submit' value="{{ $Modo =='create' ? 'Add': 'Edit'}}" class='btn btn-md btn-success'/>
@endsection