<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingGenerateSumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_generate_sum', function (Blueprint $table) {
            $table->bigIncrements('id_bg_sum');
            $table->integer('id_user');
            $table->integer('customer_ref');
            $table->timestamp('kl_start_date');
            $table->timestamp('kl_end_date');
            $table->string('product', 225);
            $table->decimal('monthly_reccuring_charge');
            $table->decimal('usage_charge');
            $table->decimal('non_reccuring_charge');
            $table->decimal('termin_charge');
            $table->decimal('total_charge');
            $table->date('bill_period');
            $table->string('partner_name', 120);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing_generate_sum');
    }
}
