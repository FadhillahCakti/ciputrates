<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdSalesdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_salesdetail', function (Blueprint $table) {
            $table->integer('salesdetail_id');
            $table->integer('sales_id')->unsigned();
            $table->integer('cluster_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('price');
            $table->integer('qty');
            $table->integer('total');
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
        Schema::dropIfExists('td_salesdetail');
    }
}