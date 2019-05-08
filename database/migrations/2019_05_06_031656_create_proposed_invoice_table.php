<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposedInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposed_invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('partner_name', 120);
            $table->string('product', 255);
            $table->string('contract_number', 120);
            $table->integer('monthly_reccuring_charge');
            $table->integer('one_time_charge');
            $table->integer('usage_charge');
            $table->integer('penalty_charge');
            $table->integer('id_bg_sum');
            $table->integer('id_status');
            $table->integer('id_doc');
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
        Schema::dropIfExists('proposed_invoice');
    }
}
