<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatFiscalsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_fiscals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fiscal', 256);
            $table->integer('idUnidad');
            $table->string('nombramiento', 256);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cat_fiscals');
    }
}
