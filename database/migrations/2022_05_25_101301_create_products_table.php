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
            $table->string('name');
            $table->string('brand_name');
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->text('description');
            $table->text('product_details');
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->string('SKU');
            $table->integer('rec_active')->default(-1);
            $table->integer('stock_status')->default(-1);
            $table->string('barcode')->nullable();
            $table->boolean('featured')->default(false);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedInteger('quantity')->default(10);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
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
