<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->integer('film')->unsigned();
            $table->foreign('film')->references('id')->on('films')->onDelete('cascade');
            $table->integer('actor')->unsigned();
            $table->foreign('actor')->references('id')->on('actors')->onDelete('cascade');
            $table->primary(['film', 'actor']);
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
        Schema::dropIfExists('participations');
    }
}
