<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubsTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pubs_transaction', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['draft', 'published', 'complete']);
            $table->index('state');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('pub_id')->constrained('publications')->onDelete('cascade');
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
        Schema::dropIfExists('pubs_transaction');
    }
}
