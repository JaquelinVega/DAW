<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentasMigration extends Migration
{
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_client')->unsigned();
            $table->string('status');
            $table->double('total');
            $table->foreign('id_client')->references('id')->on('clients');
           
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
        Schema::dropIfExists('sells');
    }
}
