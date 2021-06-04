<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMechanicsSignUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanics_sign_ups', function (Blueprint $table) {
            $table->id();
            $table->string("fname",20);
            $table->string("lname",20);
            $table->string("address",20);
            $table->string("mobile",20);
            $table->string("skills",20);
            $table->string("email",20);
            $table->string("password",20);
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
        Schema::dropIfExists('mechanics_sign_ups');
    }
}
