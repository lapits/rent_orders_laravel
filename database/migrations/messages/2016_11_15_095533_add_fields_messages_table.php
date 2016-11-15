<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->index(); // ид пользователя из таблицы users
            $table->integer('summa'); // сумма аренды
            $table->text('message'); // комментарий
            $table->integer('region'); // регион обслуживания
            $table->integer('fns_code'); // номер ФНС
            $table->text('address'); // адрес помещения строкой
            $table->integer('room_space'); // площадь помещения
            // номер комнаты
            // вид услуги (договор аренды, коворкинг и т.п.
            // Требуется ли услуга указания адреса постоянного местонахождения и.о. Арендатора в выбранном объекте?
            // Вы соглашаетесь с тем, что Ваш клиент обязуется оплатить адрес постоянного местонахождения в объекте?
            // способ оплаты наличные/перевод
            // сумму арендных платежей по договору (в рублях, без любых знаков препинания, только цифры).
            // вид оплаты помесячная/ разовая
            // сумму ежемесячных перечислений по договору:
            // необходимо ли выставить счет на оплату (да/нет)
            // необходимо ли предоставить акт/акты оказания услуг (да/нет):
            // Полное наименование Арендатора (Точно так, как оно должно быть прописано в договоре)
            // Организационно правовая форма Арендатора
            // Должность лица, являющегося подписантом по договору Аренды от лица Арендатора:
            // Документ - основание полномочий подписанта от лица Арендатора
            // Ф.И.О. подписанта от лица Арендатора в Родительном падеже
            // Фамилия и инициалы подписанта от лица Арендатора в Именительном падеже
            // Выбирите к какой категории относится Арендатор:(Первичная регистрация (вновь создаваемая организация);Перерегистрация (переезд из другой внутри одного региона);Миграция (смена региона);)
            // Укажите какой датой датировать договор (дату начала срока действия договора): С даты государственной регистрации юридического лица (Арендатора)С даты подачи Вами данной заявкиВы сообщите дату позднее
            // ИНН Плательщика
            // КПП Плательщика
            // ОГРН Плательщика
            // БИК Плательщика
            // Счет номер Плательщика
            // Банк Плательщика
            // Корр счет Плательщика
            // Укажите полное наименование ИФНС, где состоит на учете: область, город, номер ИФНС и т.п.
            // ИНН Арендатора
            // КПП Арендатора
            // ОГРН Арендатора
            // БИК Арендатора
            // Счет номер Арендатора
            // Банк Арендатора
            // Корр счет Арендатора
            // 
            // Наименование компании
            // ФИО заполнявщего
            // Телефон рабочий для связи
            // Телефон мобильный для связи
            // Эл. почта
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            //
        });
    }
}
