<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('email');

            $table->text('Q1');
            $table->text('Q2');
            $table->text('Q3');
            $table->text('Q4');
            $table->text('Q5');
            $table->text('Q6');
            $table->text('Q7');
            $table->text('Q8');
            $table->text('Q9');
            $table->text('Q10');
            $table->text('Q11');
            $table->text('Q12');
            $table->text('Q13');
            $table->text('Q14');
            $table->text('Q15');
            $table->text('Q16');
            $table->text('Q17');
            $table->text('Q18');
            $table->text('Q19');
            $table->text('Q20');

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
        Schema::dropIfExists('questions');
    }
}
