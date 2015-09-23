<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailNewsletter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_newsletter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_newsletter')->unsigned();
            $table->string('email');
            $table->foreign('id_newsletter')->references('id')->on('newsletter');
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
        Schema::drop('email_newsletter');
    }
}
