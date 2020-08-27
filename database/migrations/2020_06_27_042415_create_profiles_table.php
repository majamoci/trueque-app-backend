<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->primary('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('gender', ['Masculino', 'Femenino', ''])->nullable();
            $table->date('birthday')->nullable();
            $table->string('city');
            $table->string('telephone')->nullable();
            $table->string('mobile');
            $table->string('mobile_2')->nullable();
            $table->string('profession')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('interests')->comment('se guardan en una cadena separada por comas')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
