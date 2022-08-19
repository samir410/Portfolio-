<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('fullname');
            $table->date('dob');
            $table->string('age');
            $table->string('address');
            $table->string('number');
            $table->string('inputEmail');
            $table->string('profile_image');
            $table->longText('description1');
            $table->longText('description2');
            $table->longText('description3');
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
        Schema::dropIfExists('abouts');
    }
};
