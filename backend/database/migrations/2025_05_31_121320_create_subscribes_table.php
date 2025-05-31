<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recruiter_id')->constrained()->onDelete('cascade');
            $table->foreignId('plan_id')->constrained()->onDelete('cascade');

            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['active', 'expired', 'cancelled'])->default('active');

            // $table->string('payment_reference')->nullable();
            // $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded'])->default('pending');

            $table->boolean('auto_renew')->default(false);

            $table->unsignedInteger('jobs_remaining')->nullable();
            $table->unsignedInteger('cv_views_remaining')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscribes');
    }
};

