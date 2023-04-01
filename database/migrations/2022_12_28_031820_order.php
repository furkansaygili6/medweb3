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
        schema::create('order', function (Blueprint $table) {
            $table->id("order_id");
            $table->string("title");
            $table->string("info");
            $table->float("total");
            $table->string("order_prodcut");
            $table->string("address");





        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("order");

    }
};
