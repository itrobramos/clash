
<form action="{{ url('/card') }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    @include("card.form",['Modo'=>'create'])
</form>

