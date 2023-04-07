<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('registrationno');
            $table->string('class');
            $table->string('address');
            $table->date('admissiondate');
            $table->integer('mobileno');
            $table->date('dateofbirth');
            $table->string('gender');
            $table->string('fathersname');
            $table->string('fprofession');
            $table->string('mothersname');
            $table->string('mprofession');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
