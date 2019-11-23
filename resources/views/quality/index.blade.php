@extends('layouts.app')


@if(Session::has('Message'))
{{ Session::get('Message')}}
@endif


@section('content')


<div class="container">
<a href="{{ url('quality/create')}}"><button class='btn btn-primary'>Add new</button></a>
<br><br>
<div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
        </thead>
        <tbody>
            @foreach($qualities as $quality)
            <tr>
                <td class='col-md-1'>{{$loop->iteration}}</td>
                <td class='col-md-8'>{{$quality->name}}</td>
                <td class='col-md-2'><input type="color" value="{{$quality->color}}" class="form-control"></td>
                <td class='col-md-1'><a href="{{ url('/quality/' . $quality->id . '/edit/') }}" ><button class='btn btn-sm btn-primary'>Edit</button></a></td>
                
                <td class='col-md-1'>
                    <form method='post' action="{{ url('/quality/' . $quality->id) }}">
                        {{ csrf_field()}}
                        {{ method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('Are you sure?');" value="Delete" class='btn btn-sm btn-danger'>   
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
