<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_choices', function (Blueprint $table) {
            $table->id('choices_id');
//            $table->bigInteger('user_id')->unsigned();
//            $table->bigInteger('category_id')->unsigned();
            $table->date('date');
            $table->foreignId('category_id')->constrained('meal_categories','category_id');
            $table->foreignId('user_id')->constrained('users','user_id');
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
        Schema::dropIfExists('meal_choices');
    }
}
