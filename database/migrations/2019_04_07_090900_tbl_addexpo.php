<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAddexpo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_addexpo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('expotitle');
            $table->string('expotype');
            $table->integer('noofbooth');
            $table->string('catogoryname');
            $table->string('subcatogoryname');
            $table->string('state');
            $table->string('city');
            $table->date('sdate');
            $table->date('edate');
            $table->string('plan');
            $table->string('image');
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
