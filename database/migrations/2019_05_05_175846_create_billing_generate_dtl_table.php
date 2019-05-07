<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingGenerateDtlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_generate_dtl', function (Blueprint $table) {
            $table->bigIncrements('id_bg_dtl');
            $table->integer('customer_ref');
            $table->timestamp('kl_start_date');
            $table->timestamp('kl_end_date');
            $table->string('product', 225);
            $table->integer('monthly_reccuring_charge');
            $table->integer('usage_charge');
            $table->integer('non_reccuring_charge');
            $table->integer('termin_charge');
            $table->integer('total_charge');
            $table->date('bill_period');
            $table->string('partner_name', 120);
            $table->string('description', 225);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing_generate_dtl');
    }
}
