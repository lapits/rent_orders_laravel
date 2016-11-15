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
            $table->char('inn',12); // ИНН Арендатора
            $table->char('kpp',8); // КПП Арендатора
            $table->char('ogrn',15); // ОГРН Арендатора
            $table->char('bik',9); // БИК Арендатора
            $table->char('acc',20); // Счет номер Арендатора
            $table->string('bank'); // Банк Арендатора
            $table->char('acc_korr'); // Корр счет Арендатора
            // 
            $table->string('request_company_name'); // Наименование компании
            $table->string('request_name'); // ФИО заполнявщего
            $table->string('request_phone_work'); // Телефон рабочий для связи
            $table->string('request_phone_mobile'); // Телефон мобильный для связи
            $table->string('request_email'); // Эл. почта
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
            $table->dropColumn('fns');
            $table->dropColumn('inn');
            $table->dropColumn('kpp');
            $table->dropColumn('ogrn');
            $table->dropColumn('bik');
            $table->dropColumn('acc');
            $table->dropColumn('bank');
            $table->dropColumn('acc_korr');
            // 
            $table->dropColumn('request_company_name');
            $table->dropColumn('request_name');
            $table->dropColumn('request_phone_work');
            $table->dropColumn('request_phone_mobile');
            $table->dropColumn('request_email');
            
        });
    }
}
