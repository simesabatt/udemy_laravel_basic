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
        // —ñ‚ð’Ç‰Á‚·‚é‚Æ‚«‚ÍAcreate‚Å‚Í‚È‚­table‚Å’Ç‰Á‚·‚é
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->string('title', 50)->after('name'); // ->after('ƒJƒ‰ƒ€–¼'):‚Ç‚ÌƒJƒ‰ƒ€‚ÌŒã‚É’Ç‰Á‚·‚é‚©
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
