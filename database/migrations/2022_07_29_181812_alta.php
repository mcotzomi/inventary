<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        schema::create('altas', function (blueprint $table) {
            $table->id();
            $table->integer('increnmento');
            $table->unsignedBigInteger('id_area')->nullable();
            $table->foreign('id_area')
                ->references('id')
                ->on('areas')
                ->onDelete('set null');
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
        schema::dropIfExists('altas');
    }
};