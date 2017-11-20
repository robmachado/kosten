<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterias', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('operational', 16, 2);
            $table->decimal('financial', 16, 2);
            $table->decimal('apportionment', 16, 2);
            $table->decimal('profit', 8, 6);
            $table->decimal('commission', 8, 6);
            $table->decimal('rate', 8, 6);
            $table->decimal('ipi', 8, 6);
            $table->decimal('pis', 8, 6);
            $table->decimal('cofins', 8, 6);
            $table->decimal('csll', 8, 6);
            $table->decimal('ir', 8, 6);
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
        Schema::dropIfExists('criterias');
    }
}
