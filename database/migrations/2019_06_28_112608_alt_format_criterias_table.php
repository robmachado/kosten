<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AltFormatCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('criterias', function (Blueprint $table) {
            $table->decimal('profit', 10, 6)->change();
            $table->decimal('commission', 10, 6)->change();
            $table->decimal('rate', 10, 6)->change();
            $table->decimal('ipi', 10, 6)->change();
            $table->decimal('pis', 10, 6)->change();
            $table->decimal('cofins', 10, 6)->change();
            $table->decimal('csll', 10, 6)->change();
            $table->decimal('ir', 10, 6)->change();
        });
        DB::unprepared(""
            . "UPDATE criterias SET "
            . "apportionment=apportionment/1000, "
            . "profit=profit*100, "
            . "commission=commission*100, "
            . "rate=rate*100, "
            . "ipi=ipi*100, "
            . "pis=pis*100, "
            . "cofins=cofins*100, "
            . "csll=csll*100, "
            . "ir=ir*100"
        );
        Schema::table('criterias', function (Blueprint $table) {
            $table->decimal('operational', 16, 1)->change(); //$
            $table->decimal('financial', 16, 1)->change(); //$
            $table->integer('apportionment')->change(); //ton
            $table->decimal('profit', 5, 1)->change();
            $table->decimal('commission', 5, 1)->change();
            $table->decimal('rate', 4, 2)->change();
            $table->decimal('ipi', 4, 2)->change();
            $table->decimal('pis', 4, 2)->change();
            $table->decimal('cofins', 4, 2)->change();
            $table->decimal('csll', 4, 2)->change();
            $table->decimal('ir', 4, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('criterias', function (Blueprint $table) {
            $table->decimal('operational', 16, 2)->change();
            $table->decimal('financial', 16, 2)->change();
            $table->decimal('apportionment', 16, 2)->change();
            $table->decimal('profit', 8, 6)->change();
            $table->decimal('commission', 8, 6)->change();
            $table->decimal('rate', 8, 6)->change();
            $table->decimal('ipi', 8, 6)->change();
            $table->decimal('pis', 8, 6)->change();
            $table->decimal('cofins', 8, 6)->change();
            $table->decimal('csll', 8, 6)->change();
            $table->decimal('ir', 8, 6)->change();
        });
    }
}
