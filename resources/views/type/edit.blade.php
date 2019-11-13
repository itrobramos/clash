<h1>Edit Type: {{$type->name}}</h1>

<form action="{{ url('/type/' . $type->id) }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}

<label for="Name">{{'Name'}}</label>

<input type ='text' name='Name' id='Name' value = '{{$type->name}}' class='form-control'>
<br>
<a href="{{ url('type')}}">Back</a>

<input type ='submit' value='Save' class='btn-primary'/>

</form>