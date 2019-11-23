
<form action="{{ url('/quality/' . $quality->id) }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}

@include("quality.form",['Modo'=>'edit'])


</form>