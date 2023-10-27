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
        Schema::create('returnns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_detail_id')
            ->constrained()
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->boolean('charge');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returnns');
    }
};
