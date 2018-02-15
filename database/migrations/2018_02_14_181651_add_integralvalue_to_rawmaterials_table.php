<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIntegralvalueToRawmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawmaterials', function (Blueprint $table) {
            $table->decimal('valueorigin', 8, 4)->nullable();
            $table->decimal('icms', 8, 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rawmaterials', function (Blueprint $table) {
            $table->dropColumn(['valueorigin', 'icms']);
        });
    }
}
