
<form action="{{ url('/target') }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    @include("target.form",['Modo'=>'create'])
</form>

