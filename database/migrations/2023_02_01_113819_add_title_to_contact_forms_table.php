<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ���ǉ�����Ƃ��́Acreate�ł͂Ȃ�table�Œǉ�����
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->string('title', 50)->after('name'); // ->after('�J������'):�ǂ̃J�����̌�ɒǉ����邩
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->dropColumn('title');
        });
    }
};
