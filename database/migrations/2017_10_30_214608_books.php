<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Added by Mohamed Buhary 10/30/2017
      Schema::create('Books',function($newtable){
                    $newtable->increments('id');
                    $newtable->string('Item');
                    $newtable->string('price');
                    $newtable->text('description');
                    $newtable->date('published');
                    $newtable->integer('copies');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //Added by Mohamed Buhary 10/30/2017

      Shema:dropIfExists('Books');

    }
}
