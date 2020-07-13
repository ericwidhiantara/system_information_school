<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScClassroomQuestChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*pilihan ganda*/
        Schema::create('sc_classroom_quest_choices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sc_classroom_post_id')->unsigned();
            $table->longText('answer');
            $table->string('correct');
            $table->string('select_a');
            $table->string('select_b');
            $table->string('select_c');
            $table->string('select_d')->nullable();
            $table->string('select_e')->nullable();
            $table->string('file_choices')->nullable();
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
        Schema::dropIfExists('sc_classroom_quest_choices');
    }
}
