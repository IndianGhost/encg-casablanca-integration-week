<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateAttachments
 *
 * @author abellaali
 */
class CreateAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->bigIncrements('attachment_id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->longText('path')->nullable();
            $table->bigInteger('club_id')->unsigned();
            $table->bigInteger('game_id')->unsigned();

            $table->foreign('club_id')
                ->references('club_id')
                ->on('clubs')->onDelete('cascade');

            $table->foreign('game_id')
                ->references('game_id')
                ->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
