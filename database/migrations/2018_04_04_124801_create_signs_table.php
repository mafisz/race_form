<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->text('address');
            $table->string('id_card');
            $table->string('phone');
            $table->string('email');
            $table->string('driving_license');
            $table->string('oc');
            $table->string('nw')->nullable();
            $table->string('pilot_name')->nullable();
            $table->string('pilot_lastname')->nullable();
            $table->text('pilot_address')->nullable();
            $table->string('pilot_id_card')->nullable();
            $table->string('pilot_phone')->nullable();
            $table->string('pilot_email')->nullable();
            $table->string('pilot_driving_license')->nullable();
            $table->string('pilot_oc')->nullable();
            $table->string('pilot_nw')->nullable();
            $table->string('marka');
            $table->string('model');
            $table->string('turbo');
            $table->string('nr_rej');
            $table->string('ccm');
            $table->string('rok');
            $table->string('klasa');
            $table->string('payment')->nullable();
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
        Schema::dropIfExists('signs');
    }
}
