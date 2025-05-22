<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations: php artisan migrate
     * 
     * php artisan make:migration create_new_table
     * 
     * php artisan make:model Name
     */
    public function up(): void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->mediumText('texto');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations
     * 
     * Volta com as alterações: php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
