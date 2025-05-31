<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('emplois', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recruiter_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('code_noc')->nullable();
            $table->string('city');
            $table->string('province');
            $table->unsignedInteger('salary_min');
            $table->unsignedInteger('salary_max');
            $table->enum('salary_type', ['hourly', 'monthly', 'yearly']);
            $table->enum('job_type', ['full_time', 'part_time', 'contract', 'internship']);
            $table->boolean('visa_sponsorship')->default(false);
            $table->string('language_required')->nullable();
            $table->string('education_level')->nullable();
            $table->unsignedTinyInteger('experience_required')->default(0);
            $table->date('application_deadline')->nullable();
            $table->unsignedInteger('max_apply')->nullable();
            $table->text('job_details')->nullable();
            $table->enum('status', ['active', 'inactive', 'paused'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emplois');
    }
};
