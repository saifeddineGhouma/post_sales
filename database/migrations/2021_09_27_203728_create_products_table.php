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
            $table->string('name')->nullable();
            $table->decimal('price_vente', 11,2)->nullable();
            $table->decimal('price_achat_ht', 11,2)->nullable();
            $table->decimal('price_achat_ttc', 11,2)->nullable();
            $table->decimal('price_promotion', 11,2)->nullable();
            $table->decimal('tva', 5,3)->nullable();
            $table->text('description')->nullable();
            $table->string('bar_code')->nullable();
            $table->string('picture')->nullable();
            $table->string('status')->nullable();
            $table->string('unite')->nullable();
            $table->string('famille_comptable')->nullable();
            $table->string('methode_approvisionnement')->nullable();
            $table->integer('qty_stock')->nullable();
            $table->integer('qty_stock_alert')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
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
