<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('product_id')->nullable();
            // $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId('product_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();

            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts',function(Blueprint $table){
            $table->dropForeign(['product_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('carts');
    }
}
