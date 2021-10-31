<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fName');
            $table->string('lName');
            $table->unsignedBigInteger('company');
            $table->foreign('company')->references('c_id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('phone');
            $table->string('email');
            $table->string('profile_Photo');
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
        Schema::dropIfExists('employees');
    }
}
