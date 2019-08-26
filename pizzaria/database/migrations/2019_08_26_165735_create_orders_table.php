<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pizza_id');
            $table->string('client_telephone');
            $table->integer('quantity');
            $table->float('total', 8, 2);

            $table->timestamps();

            $table->foreign('pizza_id')->references('id')->on('pizzas')->onDelete('restrict');
            $table->foreign('client_telephone')->references('telephone')
            ->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
