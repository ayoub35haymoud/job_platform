<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profession')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province', 10)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->json('links')->nullable();
            $table->string('resume_phat')->nullable();
            $table->string('letter_phat')->nullable();
            $table->boolean('profile_completed')->default(false);
            $table->text('about')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
