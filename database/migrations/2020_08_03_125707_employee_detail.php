<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //before migration create database name "employees"
    public function up() //migration of table in database contain 6 data intable
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname',250);
            $table->string('lastname',250);
            $table->integer('age');
            $table->date('birthday');
            $table->string('position',250);
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
