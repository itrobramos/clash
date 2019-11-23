
<form action="{{ url('/speed') }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    @include("speed.form",['Modo'=>'create'])
</form>

