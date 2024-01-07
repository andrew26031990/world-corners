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
        Schema::create('locations', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->string('title');
            $table->string('slug');
            $table->string('keywords');
            $table->string('description');
            $table->text('text');
            $table->text('short_text');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->string('img')->nullable();
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
