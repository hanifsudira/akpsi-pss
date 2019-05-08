<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceSettlementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_settlement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('partner_name', 120);
            $table->string('product', 255);
            $table->integer('unit_price');
            $table->integer('amount');
            $table->integer('tax_amount');
            $table->integer('total');
            $table->date('bill_period');
            $table->timestamp('generated_date');
            $table->integer('id_bg_sum');
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
        Schema::dropIfExists('invoice_settlement');
    }
}
