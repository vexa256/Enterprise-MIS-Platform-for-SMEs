<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxLogsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tax_logs', function (Blueprint $table) {
            $table->id();
            $table->string('Tax');
            $table->text('Description');
            $table->bigInteger('Percentage');
            $table->string('TID');
            $table->string('PayID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tax_logs');
    }
}
