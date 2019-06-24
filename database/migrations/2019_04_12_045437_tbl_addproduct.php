<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAddproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_addproduct', function (Blueprint $table) {
            $table->increments('add_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_company');
            $table->string('productname');
             $table->string('image');
            $table->string('productdetails');
            $table->integer('price');
            
           // $table->string('email',60)->unique();
           // $table->string('Role');
           // $table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->string('type');
            //$table->string('status');
            
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
