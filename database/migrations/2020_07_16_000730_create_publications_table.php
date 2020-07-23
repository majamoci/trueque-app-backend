<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->decimal('price', 13,4);
            $table->string('address', 100);
            $table->string('category', 100);
            $table->enum('available', ['one', 'multiple']);
            $table->string('description', 500);
            $table->json('photos')->nullable();
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
        Schema::dropIfExists('publications');
    }
}
