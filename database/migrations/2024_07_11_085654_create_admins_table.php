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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('Merek');
            $table->string('Foto');
            $table->bigInteger('Harga');
            $table->string('Processor');
            $table->string('Layar');
            $table->string('Memori');
            $table->text('Deskripsi');
            $table->unsignedBigInteger('categories_id'); // Foreign key column
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
