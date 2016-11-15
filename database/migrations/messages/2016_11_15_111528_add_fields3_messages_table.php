<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFields3MessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->text('fns'); // Укажите полное наименование ИФНС, где состоит на учете: область, город, номер ИФНС и т.п.
            $table->char('inn'); // ИНН Арендатора
            $table->char('kpp'); // КПП Арендатора
            $table->char('ogrn'); // ОГРН Арендатора
            $table->char('bik'); // БИК Арендатора
            $table->char('acc'); // Счет номер Арендатора
            $table->atring('bank'); // Банк Арендатора
            $table->char('acc_korr'); // Корр счет Арендатора
            // 
            $table->string('request_company_name'); // Наименование компании
            $table->string('request_name'); // ФИО заполнявщего
            $table->string('request_phone_work'); // Телефон рабочий для связи
            $table->string('request_phone_mobile'); // Телефон мобильный для связи
            $table->string('request_email'); // Эл. почта
            
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
