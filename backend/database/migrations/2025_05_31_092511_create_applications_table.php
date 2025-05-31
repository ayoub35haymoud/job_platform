<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emploi_id')->constrained()->onDelete('cascade');
            $table->foreignId('recruiter_id')->constrained()->onDelete('cascade');
            $table->foreignId('job_seeker_id')->constrained()->onDelete('cascade');
            $table->text('cover_letter')->nullable();
            $table->string('cv_url')->nullable();
            $table->enum('status', ['pending', 'reviewed', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
            $table->unique(['job_seeker_id', 'emploi_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
