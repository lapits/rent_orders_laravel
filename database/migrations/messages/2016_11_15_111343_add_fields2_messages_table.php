<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFields2MessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->text('full_name_tenant'); // Полное наименование Арендатора (Точно так, как оно должно быть прописано в договоре)
            $table->string('sort_company'); // Организационно правовая форма Арендатора
            $table->string('position_sign'); // Должность лица, являющегося подписантом по договору Аренды от лица Арендатора:
            $table->string('cert_sign'); // Документ - основание полномочий подписанта от лица Арендатора
            $table->string('sign_person_name_rp'); // Ф.И.О. подписанта от лица Арендатора в Родительном падеже
            $table->integer('sign_person_name_ip'); // Фамилия и инициалы подписанта от лица Арендатора в Именительном падеже
            $table->unsignedTinyInteger('tenant_category'); // Выбирите к какой категории относится Арендатор:(Первичная регистрация (вновь создаваемая организация);Перерегистрация (переезд из другой внутри одного региона);Миграция (смена региона);)
            $table->date('date_contract'); // Укажите какой датой датировать договор (дату начала срока действия договора): С даты государственной регистрации юридического лица (Арендатора)С даты подачи Вами данной заявкиВы сообщите дату позднее
            $table->char('inn_pay',12); // ИНН Плательщика
            $table->char('kpp_pay',8); // КПП Плательщика
            $table->char('ogrn_pay',15); // ОГРН Плательщика
            $table->char('bik_pay',9); // БИК Плательщика
            $table->char('acc_pay',20); // Счет номер Плательщика
            $table->string('bank_pay'); // Банк Плательщика
            $table->char('acc_korr_pay'); // Корр счет Плательщика
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
