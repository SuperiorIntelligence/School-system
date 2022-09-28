<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('usertype')->nullable()->comment("Student,Employee,Admin");
            $table->string("name",255)->nullable();
            $table->string("email",255)->nullable();
            $table->string("password",255)->nullable();

            $table->string("mobile",255)->nullable();
            $table->string("address",255)->nullable();
            $table->string("gender",255)->nullable();
            $table->string("profile_photo",2048)->nullable();
            $table->string("fatherName")->nullable();
            $table->string("motherName")->nullable();
            $table->string("religion")->nullable();
            $table->string("idNO")->nullable();
            $table->date("dateOfBirth")->nullable();
            $table->string("code")->nullable();
            $table->string("role")->nullable()->comment("admin,operator,user");
            $table->integer("designationId")->nullable();
            $table->integer("joinDate")->nullable();
            $table->double("salary")->nullable();
            $table->tinyInteger("status")->default(0)->comment("0=inactive,1=active");
            $table->text("remember_token")->nullable();
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
        Schema::dropIfExists('authors');
    }
}
