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
        Schema::create('house_item', function (Blueprint $table) {
            $table->id('house_item_id');
            $table->string('house_name')->nullable();
            $table->string('house_path');
            $table->string('description')->nullable(); 
            $table->timestamps();
        });
        
        Schema::table('house_item', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
         
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_item');
    }
};
