<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->text('university');
            $table->date('from');
            $table->date('to');
            $table->text('course_title');
            $table->text('course_desc');
            $table->text('university_url');
            $table->integer('portfolio_id')->unsigned()->nullable();
            $table->foreign('portfolio_id')->references('id')->on('portfolios');
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
        Schema::dropIfExists('education');
    }
}
