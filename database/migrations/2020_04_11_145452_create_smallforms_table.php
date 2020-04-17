<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmallformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smallforms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->ipAddress('visitor')->nullable();
            $table->string('blood_group')->nullable()->default('A+ve');
            $table->integer('age')->unsigned()->nullable();
            $table->string('gender', 250)->nullable();
            $table->string('symptoms', 250)->nullable();
            $table->string('exposure', 250)->nullable();
            $table->string('travel', 250)->nullable();
            $table->string('medical_condition', 250)->nullable();
            $table->string('symptoms_details', 250)->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('smallforms');
    }
}
