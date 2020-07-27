<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_sales', function (Blueprint $table) {
            $table->integer('sales_id');
            $table->integer('customer_id')->unsigned();
            $table->date('sales_date');
            $table->text('notes');
            $table->integer('total_sales_prices');
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
        Schema::dropIfExists('th_sales');
    }
}