<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article', 10)->unique();
            $table->string('description');
            $table->string('composition');
            $table->string('knittings_cod', 10);
            $table->string('raw1', 25);
            $table->string('raw2', 25)->nullable();
            $table->string('raw3', 25)->nullable();
            $table->decimal('perc1', 8, 6);
            $table->decimal('perc2', 8, 6)->nullable();
            $table->decimal('perc3', 8, 6)->nullable();
            $table->decimal('losses', 8, 6);
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
        Schema::dropIfExists('boms');
    }
}
