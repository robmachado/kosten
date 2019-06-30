<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\DB;

class AltFormatBomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boms', function (Blueprint $table) {
            $table->decimal('perc1', 10, 6)->change();
            $table->decimal('perc2', 10, 6)->nullable()->change();
            $table->decimal('perc3', 10, 6)->nullable()->change();
            $table->decimal('losses', 10, 6)->change();
        });
        DB::unprepared(""
            . "UPDATE boms SET perc1=perc1*100, "
            . "perc2=perc2*100, "
            . "perc3=perc3*100, "
            . "losses=losses*100;"
        );
        Schema::table('boms', function (Blueprint $table) {
            $table->decimal('perc1', 4, 1)->change();
            $table->decimal('perc2', 4, 1)->nullable()->change();
            $table->decimal('perc3', 4, 1)->nullable()->change();
            $table->decimal('losses', 4, 1)->change();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boms', function (Blueprint $table) {
            //
        });
    }
}
