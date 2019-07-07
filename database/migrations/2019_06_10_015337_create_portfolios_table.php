<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            // User
            $table->integer('id');

            // Skills
            $table->string('skills')->nullable();

            // Employer One
            $table->string('employer_one_name')->nullable();
            $table->dateTime('employer_one_start')->nullable();
            $table->dateTime('employer_one_end')->nullable();
            $table->text('employer_one_duties')->nullable();

            // Employer Two
            $table->string('employer_two_name')->nullable();
            $table->dateTime('employer_two_start')->nullable();
            $table->dateTime('employer_two_end')->nullable();
            $table->text('employer_two_duties')->nullable();

            // Employer Three
            $table->string('employer_three_name')->nullable();
            $table->dateTime('employer_three_start')->nullable();
            $table->dateTime('employer_three_end')->nullable();
            $table->text('employer_three_duties')->nullable();

            // Employer Four
            $table->string('employer_four_name')->nullable();
            $table->dateTime('employer_four_start')->nullable();
            $table->dateTime('employer_four_end')->nullable();
            $table->text('employer_four_duties')->nullable();

            // Employer Five
            $table->string('employer_five_name')->nullable();
            $table->dateTime('employer_five_start')->nullable();
            $table->dateTime('employer_five_end')->nullable();
            $table->text('employer_five_duties')->nullable();

            // School
            $table->string('school_name')->nullable();
            $table->dateTime('school_start')->nullable();
            $table->dateTime('school_end')->nullable();
            $table->string('degree')->nullable();

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
        Schema::dropIfExists('portfolios');
    }
}
