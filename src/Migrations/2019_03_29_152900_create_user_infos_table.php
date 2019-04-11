<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->increments('id')->comment('实名认证ID');
            $table->unsignedInteger('user_id')->comment('用户ID');
            $table->string('name')->comment('姓名');
            $table->string('passport_id')->comment('证件号');
            $table->string('passport_front')->comment('证件正面');
            $table->string('passport_back')->comment('证件背面');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
