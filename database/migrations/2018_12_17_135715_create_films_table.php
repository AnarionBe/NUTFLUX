<?php
// Made by Marco*********************************************
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
            $table->string('link')->unique();
            $table->string('poster')->nullable();
            $table->integer('film-director')->unsigned();
            $table->foreign('film-director')->references('id')->on('film_directors')->onDelete('cascade');
            $table->date('release');
            $table->string('synopsis')->nullable();
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
        Schema::dropIfExists('films');
    }
}
// End made zone*********************************************