<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblBoothallocate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_boothallocate', function (Blueprint $table) {
            $table->increments('allocate_id');
            $table->string('expotitle');
            $table->string('companyname');
            $table->string('sdate');
            $table->string('edate');
            $table->string('request');

           
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
