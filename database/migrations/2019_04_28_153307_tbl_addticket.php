<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAddticket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_addticket', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('tbl_addexpo');
            $table->string('expotitle');
            $table->string('tickettype');
            $table->integer('ticketrate');
            $table->integer('nooftickets');

           
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
