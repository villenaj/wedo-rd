<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_us', function (Blueprint $table) {
            $table->id();
            $table->char('page_title',100)->nullable()->default('0');
            $table->longText('page_paragraph')->nullable()->default('0');
            $table->char('ser1_title',100)->nullable()->default('0');
            $table->longText('ser1_paragraph')->nullable()->default('0');
            $table->char('ser2_title',100)->nullable()->default('0');
            $table->longText('ser2_paragraph')->nullable()->default('0');
            $table->char('ser3_title',100)->nullable()->default('0');
            $table->longText('ser3_paragraph')->nullable()->default('0');
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
        Schema::dropIfExists('why_us');
    }
}
