<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('userid')->index(); // ид пользователя из таблицы users
            $table->text('message'); // комментарий
            $table->integer('region'); // регион обслуживания
            $table->integer('fns_code'); // номер ФНС
            $table->text('address'); // адрес помещения строкой
            $table->integer('room_space'); // площадь помещения
            $table->char('room_number',10); // номер комнаты
            $table->unsignedTinyInteger('service_type'); // вид услуги (договор аренды, коворкинг и т.п.
            $table->boolean('need_address'); // Требуется ли услуга указания адреса постоянного местонахождения и.о. Арендатора в выбранном объекте?
            $table->boolean('agree_client_pay'); // Вы соглашаетесь с тем, что Ваш клиент обязуется оплатить адрес постоянного местонахождения в объекте?
            $table->unsignedTinyInteger('type_payment'); // способ оплаты наличные/перевод
            $table->integer('summa'); // сумму арендных платежей по договору (в рублях, без любых знаков препинания, только цифры).
            $table->unsignedTinyInteger('period_payment'); // вид оплаты помесячная/ разовая
            $table->integer('month_payment_summa'); // сумму ежемесячных перечислений по договору:
            $table->boolean('need_invoice'); // необходимо ли выставить счет на оплату (да/нет)
            $table->boolean('need_cert_completion'); // необходимо ли предоставить акт/акты оказания услуг (да/нет):
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
