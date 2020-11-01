<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attachments', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->bigInteger('club_id')->unsigned()->nullable()->change();
            $table->bigInteger('game_id')->unsigned()->nullable()->change();
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attachments', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->bigInteger('club_id')->unsigned()->nullable(false)->change();
            $table->bigInteger('game_id')->unsigned()->nullable(false)->change();
            Schema::enableForeignKeyConstraints();
        });
    }
}
