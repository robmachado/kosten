<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawmaterialsTable extends Migration
{
    /**
     * Lista de materias primas
     * Pelo codigo de grupo de FIOS (reference)
     * @return void
     */
    public function up()
    {
        Schema::create('rawmaterials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference', 25)->unique();
            $table->decimal('value', 8, 4);//valor sem ICMS
            $table->decimal('valueicms', 8, 4);//valor com ICMS
            $table->string('provider_cod');
            $table->string('description');
            $table->string('basecomponent');
            $table->integer('cables')->unsigned();
            $table->integer('dtex')->unsigned();
            $table->integer('filaments')->unsigned();
            $table->string('finishing');
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
        Schema::dropIfExists('rawmaterials');
    }
}
