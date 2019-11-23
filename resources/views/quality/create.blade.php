
<form action="{{ url('/quality') }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    @include("quality.form",['Modo'=>'create'])
</form>

