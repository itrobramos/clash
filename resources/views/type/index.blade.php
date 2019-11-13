@if(Session::has('Message'))
{{ Session::get('Message')}}
@endif

<a href="{{ url('type/create')}}">Add new</a>

<table class="table table-light table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>        
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$type->name}}</td>
            <td>
                
                <a href="{{ url('/type/' . $type->id . '/edit/') }}">Edit</a>
            
                | 

                <form method='post' action="{{ url('/type/' . $type->id) }}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Are you sure?');" value="Delete">   
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>