<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFooterSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_section', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('logo')->nullable();
          $table->string('logo_name')->nullable();
          $table->string('email')->nullable();
          $table->string('mail_address')->nullable();
          $table->string('phone')->nullable();
          $table->string('address')->nullable();
          $table->string('facebook')->nullable();
          $table->string('twitter')->nullable();
          $table->string('instagram')->nullable();
          $table->string('google_plus')->nullable();
          $table->string('linkedin')->nullable();
          $table->text('description')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('footer_section');
    }
}
