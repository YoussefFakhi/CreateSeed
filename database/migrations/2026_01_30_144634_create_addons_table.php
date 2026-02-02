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
            Schema::create('addons', function (Blueprint $table) {
                $table->id();
                $table->string('key')->unique();
                $table->string('title');
                $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();
                $table->decimal('price', 10, 2);
                $table->string('price_mode') ;
                $table->string('form_key')->nullable();
                $table->boolean('has_form')->default(false);
                $table->text('description')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addons');
    }
};
