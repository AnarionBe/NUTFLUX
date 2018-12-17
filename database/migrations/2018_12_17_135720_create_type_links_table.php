<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_links', function (Blueprint $table) {
            $table->integer('type')->unsigned();
            $table->foreign('type')->references('id')->on('types')->onDelete('cascade');
            $table->integer('film')->unsigned();
            $table->foreign('film')->references('id')->on('films')->onDelete('cascade');
            $table->primary(['type', 'film']);
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
        Schema::dropIfExists('type_links');
    }
}
