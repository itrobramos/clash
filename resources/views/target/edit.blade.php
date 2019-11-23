
<form action="{{ url('/target/' . $target->id) }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}

@include("target.form",['Modo'=>'edit'])


</form>