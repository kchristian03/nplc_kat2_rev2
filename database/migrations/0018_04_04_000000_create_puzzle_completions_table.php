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
        Schema::create('puzzle_completions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->string('puzzle');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puzzle_completions');
    }
};
