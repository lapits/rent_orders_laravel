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
        <div class="h3 bg-warning">Вид услуги:</div>
        <div class="form-group">
            <label class="control-label" for="service_type">Выберите интересующий Вас вид услуги</label>
            <div class="controls">
                <select class="form-control" size="3" name="service_type" id="service_type">
                    <option value=1>1. Договор аренды почасовой (для проведения разовой встречи)</option>
                    <option value=2>2. Договор коворкинга</option>
                    <option selected value=3>3. Договор аренды (традиционный);</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="need_address">Требуется ли услуга указания адреса постоянного местонахождения и.о. Арендатора в выбранном объекте?</label>
            <div class="controls">
                <select class="form-control" size="2" name="need_address" id="need_address">
                    <option value=1>да</option>
                    <option value=2>нет</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label" for="agree_client_pay">Вы соглашаетесь с тем, что Ваш клиент обязуется оплатить адрес постоянного местонахождения в объекте?</label>
            <div class="controls">
                <select class="form-control" size="2" name="agree_client_pay" id="agree_client_pay">
                    <option value=1>да</option>
                    <option value=2>нет</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="h3 bg-success">Оплата</div>
        <div class="form-group">
            <label class="control-label" for="type_payment">Выберите способ оплаты:</label>
            <div class="controls">
                <select class="form-control" size="2" name="type_payment" id="type_payment">
                    <option value=1>Оплата наличными</option>
                    <option value=2>Банковский перевод</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="summa">Укажите сумму арендных платежей по договору (в рублях, без любых знаков препинания, только цифры):</label>
            <div class="controls">
                <input class="form-control" placeholder="" name="summa" type="number" id="summa">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="period_payment">Выберите вид оплаты:</label>
            <div class="controls">
                <select class="form-control" size="2" name="period_payment" id="period_payment">
                    <option value=1>помесячная оплата</option>
                    <option value=2>единовременно за весь срок действия договора (разовая оплата)</option>
                </select>
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
