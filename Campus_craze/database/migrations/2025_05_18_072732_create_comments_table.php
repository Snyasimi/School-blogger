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
	    Schema::disableForeignKeyConstraints();
        Schema::create('comments', function (Blueprint $table) {
		$table->id();
		$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
		$table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
		$table->foreignId('parent_comment')->onDelete('cascade')->nullable()->constrained('comments')->default();
		$table->text('content');
            $table->timestamps();
	});
	    Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
