<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class UniquePairValuesConstraint
 *
 * @author abellaali
 */
class UniquePairValuesConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clubs_users', function (Blueprint $table) {
            $table->unique(array('club_id', 'user_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clubs_users', function (Blueprint $table) {
            $table->dropUnique(array('club_id', 'user_id'));
        });
    }
}
