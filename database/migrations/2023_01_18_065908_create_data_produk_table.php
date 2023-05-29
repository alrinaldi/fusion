<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('deltas')->create('data_produk', function (Blueprint $table) {
            $table->string('part_name')->primary();
            $table->string('customer_part_number');
            $table->string('special_tag');
            $table->string('part_description');
            $table->string('category');
            $table->string('production_plant');
            $table->integer('quantity');
            $table->boolean('report_mf2w');
            $table->boolean('report_mf4w');
            $table->boolean('report_db');
            $table->boolean('hso');
            $table->boolean('Discontinue');
            $table->string('created_by');
            $table->string('updated_by')->nullable();
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
        Schema::connection('deltas')->dropIfExists('data_produk');
    }
};
