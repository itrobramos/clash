
<form action="{{ url('/speed/' . $speed->id) }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}

@include("speed.form",['Modo'=>'edit'])


</form>