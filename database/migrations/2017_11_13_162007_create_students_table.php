<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('career_id') -> unsigned() -> nullable();
            $table->foreign('career_id') -> references('id') ->on('careers')-> OnDelete('cascade');

            $table -> bigInteger('id_card');
            $table -> string('first_Name',150);
            $table -> string('last_Name',150);

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
        Schema::dropIfExists('students');
    }
}
