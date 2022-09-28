<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_grades', function (Blueprint $table) {
            $table->id();
            $table->string("gradeName");
            $table->string("gradePoint");
            $table->string("startMark");
            $table->string("endMark");
            $table->string("startPoint");
            $table->string("endPoint");
            $table->string("remark");
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
        Schema::dropIfExists('marks_grades');
    }
}
