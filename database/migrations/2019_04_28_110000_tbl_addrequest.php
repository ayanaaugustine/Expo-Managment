<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAddrequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_addrequest', function (Blueprint $table) {
            $table->increments('req_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_company');
            $table->string('expotitle');
            $table->date('sdate');
            $table->date('edate');
            $table->integer('noofbooth');
            $table->integer('request');
    
           
           // $table->string('email',60)->unique();
           // $table->string('Role');
           // $table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->string('type');
            //$table->string('status');
            $table->rememberToken();
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
        //
    }
}
