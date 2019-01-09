<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('link')->nullable()->default(null);
            $table->string('poster')->nullable()->default(null);
            $table->integer('film-director')->unsigned()->nullable()->default(null);
            $table->foreign('film-director')->references('id')->on('film_directors')->onDelete('cascade');
            //$table->date('release');
            $table->text('synopsis')->nullable();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE `films` ADD `release` YEAR NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}