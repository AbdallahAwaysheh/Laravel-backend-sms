<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->text('description');
            $table->string('task_file')->nullable(); // PDF upload
            $table->date('end_date');
            $table->foreignId('student_id')->constrained('users'); // Relating to users (students)
            $table->foreignId('class_id')->constrained('classes'); // Relating to class
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}

