<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Films', function (Blueprint $table) {
            $table->increments('film_id');
            $table->string('name', 100);
            $table->string('description', 100);
            $table->string('releasedate', 100);
            $table->string('comment');
            $table->string('rating', 100);
            $table->string('ticketprice', 100);
            $table->string('country');
            $table->string('genre', 100);
            $table->string('photo');

            /*$table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();*/
           // $table->timestamps();
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
       Schema::dropIfExists('Films');
        //
    }
}
