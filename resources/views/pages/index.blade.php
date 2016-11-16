@extends('index')
@section('content')
<form class="form-horizontal" method="POST" id="id-form_messages">

    <div class="form-group">
        <div class="h3 bg-danger">Выбор адреса/объекта:</div>
        <div class="form-group">
            <label class="control-label" for="name">Регион обслуживания</label>
            <div class="controls">
                <select class="form-control" size="3" name="region" id="region">
                    <option selected value=1>Москва</option>
                    <option value=2>МО</option>
                    <option value=3>Санкт-Петербург</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="fns_code">Введите номер интересующей Вас ИФНС (только номер)</label>
            <div class="controls">
                <input class="form-control" placeholder="" name="fns_code" type="number" id="fns_code">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="address">Если вам известен адрес интересующего Вас помещения - введите его полностью, если нет - то по памяти.</label>
            <div class="controls">
                <input class="form-control" placeholder="" name="address" type="text" id="address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="room_space">Укажите желательную Вам площадь:</label>
            <div class="controls">
                <input class="form-control" placeholder="" name="room_space" type="number" id="room_space">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="room_number">Если вам известен номер интересующей Вас комнаты - укажите его. (только номер):</label>
            <div class="controls">
                <input class="form-control" placeholder="" name="room_number" type="text" id="room_number">
            </div>
        </div>
    
    </div>
        
    <div class="form-group">
        <div class="h3 bg-warning">Контактная информация лица, заполнившего заявку :</div>
        <div class="form-group">
            <label class="control-label" for="name">Имя *</label>
            <div class="controls">
                <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="email">E-mail:</label>
            <div class="controls">
                <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
            </div>
        </div>
    </div>
        
        
</form><hr>
@stop
