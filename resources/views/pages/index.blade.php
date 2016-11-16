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
        <div class="form-group">
            <label class="control-label" for="month_payment_summa">Укажите сумму ежемесячных перечислений по договору:</label>
            <div class="controls">
                <input class="form-control" placeholder="" name="month_payment_summa" type="number" id="month_payment_summa">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="need_invoice">Укажите, необходимо ли выставить счет на оплату (да/нет):</label>
            <div class="controls">
                <select class="form-control" size="2" name="need_invoice" id="need_invoice">
                    <option value=1>да</option>
                    <option value=2>нет</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="need_cert_completion">Укажите, необходимо ли предоставить акт/акты оказания услуг</label>
            <div class="controls">
                <select class="form-control" size="2" name="need_cert_completion" id="need_cert_completion">
                    <option value=1>да</option>
                    <option value=2>нет</option>
                </select>
            </div>
        </div>
    </div>    
        
    <div class="form-group">
        <div class="h3 bg-warning">Данные Стороны по договору (Арендатора) :</div>
        <div class="form-group">
            <label class="control-label" for="full_name_tenant">Полное наименование Арендатора (Точно так, как оно должно быть прописано в договоре)</label>
            <div class="controls">
                <input class="form-control" placeholder="ООО 'Ромашка и Цветы'" name="full_name_tenant" type="text" id="full_name_tenant">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="sort_company">Организационно-правовая форма Арендатора</label>
            <div class="controls">
                <input class="form-control" placeholder="ООО, ЗАО, ПАО, И.П. и т.п." name="sort_company" type="text" id="sort_company">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="position_sign">Должность лица, являющегося подписантом по договору Аренды от лица Арендатора:</label>
            <div class="controls">
                <input class="form-control" placeholder="Генеральный директор, Директор, 1-й заместитель генерального директора, Управляющий, Президент и т.п." name="position_sign" type="text" id="position_sign">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="cert_sign">Документ - основание полномочий подписанта от лица Арендатора:</label>
            <div class="controls">
                <input class="form-control" placeholder="Устав, доверенность №, приказ № и т.п." name="cert_sign" type="text" id="cert_sign">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="sign_person_name_rp">Ф.И.О. подписанта от лица Арендатора в родительном падеже</label>
            <div class="controls">
                <input class="form-control" placeholder="Иванова Ивана Ивановича" name="sign_person_name_rp" type="text" id="sign_person_name_rp">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="sign_person_name_ip">Фамилия и инициалы подписанта от лица Арендатора в именительном падеже</label>
            <div class="controls">
                <input class="form-control" placeholder="Иванов И. И." name="sign_person_name_ip" type="text" id="sign_person_name_ip">
            </div>
        </div>
        
    </div>    

    <div class="form-group">
        <div class="h3 bg-info">Контактная информация лица, заполнившего заявку :</div>
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
