<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('course_id')->nullable();
            $table->string('name', 50);            
            $table->string('email', 50)->nullable();
            $table->string('mobile', 14)->unique();
            $table->text('current_institute');
            $table->text('qualifications');
            $table->tinyInteger('created_by')->default(0); // 0=data entry by admen; 1=data entry by visitor;
            $table->tinyInteger('status')->default(0); // 0=student not come ecl; 0=student come ecl; 3=admit
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
        Schema::dropIfExists('student_info');
    }
}
