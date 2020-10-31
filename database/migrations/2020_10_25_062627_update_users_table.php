<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class UpdateUsersTable
 *
 * @author abellaali
 */
class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }
            if (Schema::hasColumn('users', 'id')) {
                $table->renameColumn('id', 'user_id');
            }
            $table->string('first_name')->after('id')->nullable();
            $table->string('family_name')->after('first_name')->nullable();
            $table->string('cne')->unique()->after('email')->nullable();
            $table->string('cin')->unique()->after('cne')->nullable();
            $table->string('telephone')->nullable()->after('cin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'name')) {
                $table->string('name');
            }
            $table->dropColumn('first_name');
            $table->dropColumn('family_name');
            $table->dropColumn('cne');
            $table->dropColumn('cin');
            $table->dropColumn('telephone');
        });
    }
}
