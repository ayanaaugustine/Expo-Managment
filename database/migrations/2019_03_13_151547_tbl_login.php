<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('age');
            $table->string('housename');
            $table->string('mobno');
            $table->string('country');
            $table->string('state');
            $table->string('district');
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
