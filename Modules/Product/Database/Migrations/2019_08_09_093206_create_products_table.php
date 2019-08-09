<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->string('avatar');
            $table->text('description')->nullable();
            $table->unsignedInteger('price');
            $table->unsignedInteger('discount_price')->nullable();
            $table->unsignedInteger('stock');
            $table->tinyInteger('status');
            $table->text('seo_description')->nullable();
            $table->string('seo_title', 70)->nullable();
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
