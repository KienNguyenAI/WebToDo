<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // unsignedBigInteger
            $table->string('name');
            $table->text('description')->nullable();
            $table->json('subtask')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('userId'); // unsignedBigInteger để tham chiếu
            $table->unsignedBigInteger('listId')->nullable(); // unsignedBigInteger để tham chiếu
    
        });
        
    }
    
    public function down()
    {
        Schema::dropIfExists('tasks'); // Xóa bảng nếu rollback
    }
    
};
