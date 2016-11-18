@extends('index')
@section('content')
<!--<form role="form" class="form-horizontal" method="POST" id="id-form_messages" action="{{route('sendRentRequest')}}"-->
<form role="form" class="form-horizontal" method="POST" id="id-form_messages" action="#">
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
        <div class="form-group">
            <label class="control-label" for="tenant_category">Выберите к какой категории относится Арендатор:</label>
            <div class="controls">
                <select class="form-control" size="3" name="tenant_category" id="tenant_category">
                    <option value=1>Первичная регистрация (вновь создаваемая организация)</option>
                    <option value=2>Перерегистрация (переезд из другой внутри одного региона)</option>
                    <option value=3>Миграция (смена региона)</option>
                </select>
            </div>
        </div>
        <!-- ПЕРВИЧНАЯ РЕГИСТРАЦИЯ  tenant_category=1 -->
        
        <div class="form-group">
            <label class="control-label" for="date_contract">Укажите какой датой датировать договор (дату начала срока действия договора)</label>
            <div class="controls">
                <select class="form-control" size="3" name="date_contract" id="date_contract">
                    <option value=1>С даты государственной регистрации юридического лица (Арендатора)</option>
                    <option value=2>С даты подачи Вами данной заявки</option>
                    <option value=3>Вы сообщите дату позднее</option>
                </select>
            </div>
        </div>
        <div class="form-horizontal" id="section_tenant_category_1">
            <div class="h5 form-group">Укажите следующие данные плательщика</div>
            <div class="form-group">
                <label class="control-label" for="inn_pay"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="ИНН" name="inn_pay" type="text" id="inn_pay">
                </div>
                <label class="control-label" for="kpp_pay"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="КПП" name="kpp_pay" type="text" id="kpp_pay">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="ogrn_pay"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="ОГРН" name="ogrn_pay" type="text" id="ogrn_pay">
                </div>
                <label class="control-label" for="bik_pay"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="БИК банка" name="bik_pay" type="number" id="bik_pay">
                </div>
            </div>
            <div class="form-group">        
                <label class="control-label" for="acc_pay"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Номер банковского счета" name="acc_pay" type="number" id="acc_pay">
                </div>
                <label class="control-label" for="bank_pay"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Название банка" name="bank_pay" type="text" id="bank_pay">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="acc_korr_pay"></label>
                <div class="col-sm-5">
                    <input class="form-control" placeholder="Номер корр. счета в банке" name="acc_korr_pay" type="number" id="acc_korr_pay">
                </div>
            </div>
        </div>
        
        <!--  Перерегистрация        tenant_category=2 -->
        <div class="form-horizontal" id="section_tenant_category_2">
            <div class="h5 form-group">Укажите следующие данные арендатора:</div>
            <div class="form-group">
                <label class="control-label" for="inn"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="ИНН" name="inn" type="text" id="inn">
                </div>
                <label class="control-label" for="kpp"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="КПП" name="kpp" type="text" id="kpp">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="ogrn"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="ОГРН" name="ogrn" type="text" id="ogrn">
                </div>
                <label class="control-label" for="bik"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="БИК банка" name="bik" type="number" id="bik">
                </div>
            </div>
            <div class="form-group">        
                <label class="control-label" for="acc"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Номер банковского счета" name="acc" type="number" id="acc">
                </div>
                <label class="control-label" for="bank"></label>
                <div class="col-sm-4">
                    <input class="form-control" placeholder="Название банка" name="bank" type="text" id="bank">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="acc_korr"></label>
                <div class="col-sm-5">
                    <input class="form-control" placeholder="Номер корр. счета в банке" name="acc_korr" type="number" id="acc_korr">
                </div>
            </div>
        </div>
        
        <!--  Миграция               tenant_category=3 -->
        <div class="form-group">
            <label class="control-label" for="fns">Укажите полное наименование ИФНС, где состоит на учете: область, город, номер ИФНС и т.п.</label>
            <div class="controls">
                <input class="form-control" name="fns" type="text" id="fns" placeholder="Мурманская область, г. Зеленолесск, ул. Травердичева, дом 6А, ИФНС № 11 по Мурманской области.">
            </div>
        </div>
        
        
    </div>    

    <div class="form-group">
        <div class="h3 bg-info">Контактная информация лица, заполнившего заявку :</div>
        <div class="form-group">
            <label class="control-label" for="request_company_name">Наименование Вашей Компании:</label>
            <div class="controls">
                <input class="form-control" placeholder="ООО 'Мегаполис'" name="request_company_name" type="text" id="request_company_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="request_name">Ваши Ф.И.О.</label>
            <div class="controls">
                <input class="form-control" placeholder="Трошкина Екатерина Петровна" name="request_name" type="text" id="request_name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="request_phone_work">Телефон для связи (рабочий):</label>
            <div class="controls">
                <input class="form-control" placeholder="8(495)722-88-99, доб.22-21" name="request_phone_work" type="tel" id="request_phone_work">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="request_phone_mobile">Телефон для связи (мобильный):</label>
            <div class="controls">
                <input class="form-control" placeholder="8(925)000-00-00" name="request_phone_mobile" type="tel" id="request_phone_mobile">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="request_email">эл. почта:</label>
            <div class="controls">
                <input class="form-control" placeholder="pochta@megapolis.ru" name="request_email" type="email" id="request_email">
            </div>
        </div>
    </div>
        
    <button id="sendRentRequest" type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>    
    
    {{ csrf_field() }}
</form><hr>
@stop
