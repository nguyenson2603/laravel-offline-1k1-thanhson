<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name');
            $table->unsignedInteger('price');
            $table->boolean('status');
            $table->string('description');
            $table->string('content');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_top_collection');
            $table->boolean('is_trending');
            $table->boolean('is_feature');
            $table->boolean('is_best_seller');
            $table->boolean('is_on_sale');
            $table->integer('sale');
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
}
