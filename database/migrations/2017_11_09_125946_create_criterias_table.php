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
            $table->float('operational_cost', 16, 2);
            $table->float('financial_cost', 16, 2);
            $table->float('apportionment', 16, 2);
            $table->float('profit', 8, 4);
            $table->float('commission', 8, 4);
            $table->float('financial_rate', 8, 4);
            $table->float('ipi', 8, 4);
            $table->float('pis', 8, 4);
            $table->float('cofins', 8, 4);
            $table->float('csll', 8, 4);
            $table->float('ir', 8, 4);
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
