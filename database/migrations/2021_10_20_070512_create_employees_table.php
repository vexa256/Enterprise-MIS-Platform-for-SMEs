<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('StaffName')->unique();
            $table->string('HOD')->default('false');
            $table->string('PhoneNumber')->unique();
            $table->string('Email')->unique();;
            $table->string('LocalAddress');
            $table->string('PermanentAddress');
            $table->string('NIN')->unique();;
            $table->string('IDScan')->nullable();
            $table->string('Nationality');
            $table->date('DOB');
            $table->string('Designation');
            $table->string('Gender')->nullable();
            $table->string('RoleID')->nullable();
            $table->string('ReportsTo')->nullable();
            $table->string('ReportsToRoleID')->nullable();
            $table->string('Department');
            $table->bigInteger('MonthlySalary');
            $table->string('EmpID')->unique();
            $table->string('StaffCode')->unique()->nullable();
            $table->date('JoiningDate');
            $table->date('ContractExpiry');
            $table->string('BankName');
            $table->string('BankBranch');
            $table->string('AccountName');
            $table->bigInteger('AccountNumber')->unique();
            $table->bigInteger('MonthsToExpiry');
            $table->string('TIN')->nullable()->unique();
            $table->string('BankCode')->nullable();
            $table->string('StaffPhoto')->nullable();
            $table->string('PromotionStatus')->default("false");
            $table->string('RecordStatus')->default("Contract Active");
            $table->string('SoonExpiring')->default("false");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('employees');
    }
}
