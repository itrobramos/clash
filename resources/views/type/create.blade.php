<h1>New Type</h1>

<form action="{{ url('/type') }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}

<label for="Name">{{'Name'}}</label>

<input type ='text' name='Name' id='Name' value = '' class='form-control'>
<br>
<a href="{{ url('type')}}">Back</a>

<input type ='submit' value='Add' class='btn-primary'/>

</form>

