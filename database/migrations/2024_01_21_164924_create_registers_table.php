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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('village');
            $table->string('tehsil');
            $table->string('district');
            $table->string('state');
            $table->date('date_of_birth');
            $table->string('blood_group');
            $table->string('education');
            $table->string('job');
            $table->string('religion');
            $table->string('cast');
            $table->string('sub_cast');
            $table->string('maritalStatus');
            $table->integer('familyMember');
            $table->string('rationCard');
            $table->string('aadharNumber');
            $table->string('agriculture');
            $table->string('plot');
            $table->string('cycle');
            $table->string('twoWheeler');
            $table->string('fourWheeler');
            $table->string('incomeSource');
            $table->bigInteger('familyAnnualIncome');
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
        Schema::dropIfExists('registers');
    }
};
