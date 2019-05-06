<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisputeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispute', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_invoice');
            $table->string('partner_name', 120);
            $table->date('input_date');
            $table->string('notes', 255);
            $table->decimal('amount_to_deduct_nrc');
            $table->decimal('amount_to_deduct_mrc');
            $table->decimal('amount_to_deduct_termin');
            $table->decimal('amount_to_deduct_usage');
            $table->string('status_track', 255);
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
        Schema::dropIfExists('dispute');
    }
}
