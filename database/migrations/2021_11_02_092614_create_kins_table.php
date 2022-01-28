<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('kins', function (Blueprint $table) {
            $table->id();
            $table->string('StaffName');
            $table->string('EmpID');
            $table->string('Name');
            $table->date('DateOfBirth');
            $table->string('IdType');
            $table->string('IdNumber');
            $table->string('Gender');
            $table->string('Relationship');
            $table->string('PhoneNumber');
            $table->string('CurrentAddress');
            $table->string('PermanentAddress');
            $table->string('Email')->default("NA");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('kins');
    }
}
