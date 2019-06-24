<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mobno');
            $table->string('country');
            $table->string('state');
            $table->string('district');
            $table->string('comexperience');
            $table->string('comaddress');
            $table->string('landmark');
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
