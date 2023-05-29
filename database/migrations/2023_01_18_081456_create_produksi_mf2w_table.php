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
        Schema::connection('deltas')->create('produksi_mf2w', function (Blueprint $table) {
            $table->id();
            $table->string('part_name');
            $table->foreign('part_name')->references('part_name')->on('data_produk');
            $table->string('operator');
            $table->string('inspector');
            $table->string('tables');
            $table->integer('quantity');
            $table->string('status');
            $table->integer('shift');
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
        Schema::connection('deltas')->dropIfExists('produksi_mf2w');
    }
};
