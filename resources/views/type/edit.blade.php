
<form action="{{ url('/type/' . $type->id) }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}

@include("type.form",['Modo'=>'edit'])


</form>