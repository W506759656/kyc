<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $prefix = config('ibrand.app.database.prefix', 'ibrand_');
        Schema::table($prefix.'user', function (Blueprint $table){
            $table->unsignedTinyInteger('kyc_status')->nullable()->default(0)->comment('实名认证状态:0.未实名 1.审核中 2.已实名 3.驳回');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $prefix = config('ibrand.app.database.prefix', 'ibrand_');
        Schema::table($prefix.'user', function (Blueprint $table){
            $table->dropColumn('kyc_status');
        });
    }
}
