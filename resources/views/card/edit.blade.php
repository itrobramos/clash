
<form action="{{ url('/card/' . $card->id) }}" method="Post" enctype="multipart/form-data">
{{ csrf_field()}}
{{ method_field('PATCH')}}

@include("card.form",['Modo'=>'edit'])


</form>