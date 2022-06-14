<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('duration',20);
            $table->string('image',255)->nullable();
            $table->string('location',50);
            $table->date('date_start');
            $table->date('date_return');
            $table->boolean('is_avaible');
            $table->tinyInteger('number_posts_avaible');
            $table->string('type_tour',50);
            $table->decimal('price', 7, 2);
            $table->text('services')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('tours');
    }
}
