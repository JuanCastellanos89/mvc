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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default('text');
            $table->string('url_clean')->nullable()->default('text');
            $table->text('content')->nullable();
            $table->enum('posted',['yes', 'no'])->default('yes');
            $table->bigInteger('category_id')->nullable()->unsigned();                      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
