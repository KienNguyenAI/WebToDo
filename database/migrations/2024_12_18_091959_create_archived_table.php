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
    Schema::create('archived', function (Blueprint $table) {
        $table->id(); // unsignedBigInteger
        $table->unsignedBigInteger('userid'); // unsignedBigInteger để tham chiếu
        $table->unsignedBigInteger('taskid'); // unsignedBigInteger để tham chiếu
        $table->timestamps();
    });    
}

public function down()
{
    Schema::dropIfExists('archived'); // Xóa bảng nếu rollback
}

};
