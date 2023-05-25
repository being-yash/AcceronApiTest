<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function(Blueprint $table){
            $table->string('employee_id');
            $table->string('full_name');
            $table->string('job_title');
            $table->string('department');
            $table->string('business_unit');
            $table->string('gender');
            $table->string('ethnicity');
            $table->integer('age');
            $table->string('hire_date');
            $table->string('annual_salary');
            $table->string('bonus');
            $table->string('country');
            $table->string('city');
            $table->string('exit_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
