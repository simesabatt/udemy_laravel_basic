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
        // 列を追加するときは、createではなくtableで追加する
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->string('title', 50)->after('name'); // ->after('カラム名'):どのカラムの後に追加するか
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
