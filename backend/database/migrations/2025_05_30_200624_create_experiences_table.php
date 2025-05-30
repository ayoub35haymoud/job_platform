<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_seeker_id')->constrained()->onDelete('cascade');
            $table->string('job_title');
            $table->string('company_name');
            $table->string('location')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable(); // nullable si is_current = true
            $table->boolean('is_current')->default(false);
            $table->text('description')->nullable();
            $table->string('company_website')->nullable();
            $table->string('reference_contact')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};

