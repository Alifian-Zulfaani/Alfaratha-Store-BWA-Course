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
        Schema::create('product_galleries', function (Blueprint $table)
            {
            $table->id();
            $table->integer('products_id');
            $table->string('photo');
            $table->softDeletes();
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
        Schema::dropIfExists('product_galleries');
        }
        };