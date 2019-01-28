<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDrugsColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('drugs', function (Blueprint $table) {
            $table->string('cpr_number');
            $table->string('dr_number');
            $table->string('generic');
            $table->string('brand');
            $table->string('strength');
            $table->string('form');
            $table->string('manufacturer');
            $table->string('country_of_origin');
            $table->string('trader');
            $table->string('importer');
            $table->string('distributor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('drugs');
    }
}
