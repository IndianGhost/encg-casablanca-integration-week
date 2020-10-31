<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateGamesUsers
 *
 * @author abellaali
 */
class CreateGamesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games_users', function (Blueprint $table) {
            $table->bigIncrements('games_users_id');
            $table->timestamps();

            $table->bigInteger('game_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('game_id')
                ->references('game_id')
                ->on('games')->onDelete('cascade');

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games_users');
    }
}
