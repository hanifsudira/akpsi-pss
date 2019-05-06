<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisputeDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispute_document', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('upload_time');
            $table->string('document_name', 255);
            $table->binary('document_file');
            $table->integer('upload_by');
            $table->integer('id_dispute');
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
        Schema::dropIfExists('dispute_document');
    }
}
