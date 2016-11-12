@extends('index')
@section('content')
<form method="POST" id="id-form_messages">
    <div class="form-group">
        <label for="name">Имя *</label>
        <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
    </div>

</form><hr>
@stop
