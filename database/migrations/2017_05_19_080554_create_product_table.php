<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name', 100)->unique();
            $table->string('product_description', 100)->unique();
            /*$table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();*/
            $table->timestamps();
        });//
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
