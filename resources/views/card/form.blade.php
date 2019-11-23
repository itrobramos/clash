@extends('layouts.app')

@section('content')

<h1>{{ $Modo =='create' ? 'Add card': 'Edit card'}}</h1>

<div class="container">

    <div class="row">
        <div class="col-md-4">
            @if(isset($card->imageUrl))
                <img src="{{asset($card->imageUrl)}}" alt="" width="100%" height="100%">
                <input type='file' name="imageUrl" id="imageUrl" class='form-control-file'>
            @else
                <input type='file' name="imageUrl" id="imageUrl" class='form-control-file'>
            @endif

        </div>
        <div class="col-md-8">
            <label for="Name">{{'Name'}}</label>
            <input type ='text' name='Name' id='Name' value = '{{ isset($card->name)?$card->name:""}}' class='form-control'>

            <label for="Description">{{'Description'}}</label>
            <textarea name='Description' id='Description' class='form-control'>{{ isset($card->description)?$card->description:""}}</textarea>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-4">
            <label for="Type">{{'Type'}}</label>
            <select name="typeId" id="typeId" class="form-control">
                @foreach($types as $type)
                    @if(!isset($card) || $type->id == $card->typeId)
                        <option value="{{$type->id}}" selected>{{$type->name}}</option>
                    @else
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label for="Quality">{{'Quality'}}</label>
            <select name="qualityId" id="qualityId" class="form-control">
                @foreach($qualities as $quality)
                    @if(!isset($card) || $quality->id == $card->qualityId)
                        <option value="{{$quality->id}}" selected>{{$quality->name}}</option>
                    @else
                        <option value="{{$quality->id}}">{{$quality->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label for="Target">{{'Target'}}</label>
            <select name="targetId" id="targetId" class="form-control">
                @foreach($targets as $target)
                    @if(!isset($card) || $target->id == $card->targetId)
                        <option value="{{$target->id}}" selected>{{$target->name}}</option>
                    @else
                        <option value="{{$target->id}}">{{$target->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    
    </div>

    <br>
    <div class="row">
        
        <div class="col-md-4">
            <label for="Speed">{{'Speed'}}</label>
            <select name="SpeedId" id="SpeedId" class="form-control">
                @foreach($speeds as $speed)
                    @if(!isset($card) || $speed->id == $card->speedId)
                        <option value="{{$speed->id}}" selected>{{$speed->name}}</option>
                    @else
                        <option value="{{$speed->id}}">{{$speed->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label for="Elixir">{{'Elixir'}}</label>
            <input type ='text' name='Elixir' id='Elixir' value = '{{ isset($card->elixir)?$card->elixir:""}}' class='form-control'>
        </div>
        <div class="col-md-4">
            <label for="Range">{{'Range'}}</label>
            <input type ='text' name='Range' id='Range' value = '{{ isset($card->range)?$card->range:""}}' class='form-control'>
        </div>        
    </div>

    <br><br>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-2">
            <a href="{{ url('card')}}" class="btn btn-primary btn-block">Back</a>
        </div>

        <div class="col-md-2">
            <input type ='submit' value="{{ $Modo =='create' ? 'Add': 'Edit'}}" class='btn btn-md btn-success btn-block'/>
        </div>
    </div>


    



@endsection