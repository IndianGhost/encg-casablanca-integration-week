<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateClubsUsers
 *
 * @author abellaali
 */
class CreateClubsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs_users', function (Blueprint $table) {
            $table->bigIncrements('clubs_users_id');
            $table->timestamps();

            $table->bigInteger('club_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('club_id')
                ->references('club_id')
                ->on('clubs')->onDelete('cascade');

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
        Schema::dropIfExists('clubs_users');
    }
}
