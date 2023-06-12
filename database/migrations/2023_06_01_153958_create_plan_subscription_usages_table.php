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
        Schema::create('plan_subscription_usage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscription_id')->unsigned();
            $table->foreignId('feature_id')->unsigned();
            $table->smallInteger('used')->unsigned();
            $table->dateTime('valid_until')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_subscription_usages');
    }
};
