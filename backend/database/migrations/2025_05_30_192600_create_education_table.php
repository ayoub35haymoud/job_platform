<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_seeker_id')->constrained()->onDelete('cascade');
            $table->string('degree');
            $table->string('field_of_study')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('institution_city')->nullable();
            $table->string('institution_country')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('grade')->nullable();
            $table->text('description')->nullable();
            $table->string('certificate_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};

