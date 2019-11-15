<h1>New Type</h1>

<form action="{{ url('/type') }}" method="Post" enctype="multipart/form-data">
    {{ csrf_field()}}
    @include("type.form",['Modo'=>'create'])
</form>

