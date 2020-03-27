<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('blood_group')->nullable()->default('A+ve');
            $table->string('operative_history', 200)->nullable();
            $table->string('weight', 100)->nullable();
            $table->string('height', 100)->nullable();
            $table->boolean('is_physically_challenged')->nullable()->default(false);
            $table->string('medicine', 100)->nullable();
            $table->string('insulin', 100)->nullable();
            $table->integer('age')->unsigned()->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('temp')->nullable();
            $table->string('symptoms', 100)->nullable();
            $table->string('exposure', 100)->nullable();
            $table->string('travel', 100)->nullable();
            $table->string('symptoms_condition', 100)->nullable();
            $table->string('medical_condition', 100)->nullable();
            $table->string('symptoms_details', 100)->nullable();
            $table->foreignId('data_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('information');
    }
}
