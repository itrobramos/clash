@extends('layouts.app')

@section('content')

<h1>{{ $card->name }}</h1>

<div class="container">

    <div class="row">
        <div class="col-md-4">
                <img src="{{asset($card->imageUrl)}}" alt="" width="100%" height="100%">
        </div>
        <div class="col-md-8">
            
            <div class="row">
                <div class="col-md-12">
                    <label for="Name">{{'Name'}}</label>
                    <input type ='text' name='Name' id='Name' value = '{{ $card->name }}' class='form-control' readonly>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="Description">{{'Description'}}</label>
                    <textarea name='Description' id='Description' class='form-control' readonly style="height:80%; resize:none;">{{ isset($card->description)?$card->description:""}}</textarea>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-6">
                    <label for="Quality">{{'Quality'}}</label>
                    <input type ='text' name='Quality' id='Quality' value = '{{ $card->quality->name }}' class='form-control' readonly>
                </div>
                <div class="col-md-6">
                    <label for="Type">{{'Type'}}</label>
                    <input type ='text' name='Type' id='Type' value = '{{ $card->type->name }}' class='form-control' readonly>
                </div>
            </div>

            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8" >
            <div class="row">
                <div class="col-md-4">
                    <label for ="Elixir">Elixir ({{$card->elixir}})</label><br>
                    <div class="form-control readonly">
                        @for ($i = 1; $i <= $card->elixir; $i++)
                            <img  src="{{asset('imgs/elixir.png')}}" alt="" width="14px">
                        @endfor
                    </div>
                </div>
                <div class="col-md-4">
                    <label for ="Speed">Speed</label><br>
                    <input type ='text' name='Speed' id='Speed' value = '{{ $card->speed->name }}' class='form-control' readonly>
                </div>
                <div class="col-md-4">
                    <label for ="Range">Range</label>
                    <input type ='text' name='Range' id='Range' value = '{{ $card->range }}' class='form-control' readonly>                
                </div>
            </div>
        </div>
    </div>

    <br>


    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <a href="{{ url('card')}}" class="btn btn-primary btn-block fixed-right">Back</a>
        </div>
    </div>





</div>
    



@endsection