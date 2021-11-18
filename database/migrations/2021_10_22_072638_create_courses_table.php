<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('course_code');
            $table->string('course_name');
            $table->string('lecturer');
            $table->integer('number_sks');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('courses', function (Blueprint $table) {
            //
            $table->primary('course_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
