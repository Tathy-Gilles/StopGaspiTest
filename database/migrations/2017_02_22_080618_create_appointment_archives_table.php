<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_archives', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('adviser_id');
          $table->string('type');
          $table->string('link')->nullable();
          $table->string('date');
          $table->integer('status')->default(0);
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
        Schema::dropIfExists('appointment_archives');
    }
}
