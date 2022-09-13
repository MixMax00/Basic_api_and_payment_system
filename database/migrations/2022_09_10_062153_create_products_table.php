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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('product_title');
            $table->integer('brand_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->json('color')->json_decode()->nullable();
            $table->json('size')->json_decode()->nullable();
            $table->string('unit')->nullable();
            $table->integer('qunatity');
            $table->float('price', 10, 2);
            $table->float('sell_price', 10, 2);
            $table->string('short_description');
            $table->text('long_description')->nullable();
            $table->string('image');
            $table->tinyInteger('feature')->default(0);
            $table->tinyInteger('trends')->default(0);
            $table->tinyInteger('banner')->default(0);
            $table->tinyInteger('exclusive')->default(0);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('products');
    }
};
