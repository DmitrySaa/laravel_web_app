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
        Schema::create('documents', function (Blueprint $table) {
            $table->id(); // BIGINT AUTO_INCREMENT PRIMARY KEY
            $table->string('title'); // VARCHAR(255)
            $table->string('file_path'); // Путь к файлу
            $table->unsignedBigInteger('file_size')->nullable(); // Размер файла
            $table->string('mime_type')->nullable(); // Тип файла
            $table->text('description')->nullable(); // TEXT, может быть NULL
            
            // Связи с другими таблицами
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
            
            // Timestamps (created_at, updated_at)
            $table->timestamps();
            
            // Индексы для оптимизации
            $table->index('user_id');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
