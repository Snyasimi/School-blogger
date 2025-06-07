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
	    Schema::create('posts', function (Blueprint $table) {

		     $table->charset   = 'utf8mb4';   
		     $table->collation = 'utf8mb4_unicode_ci';
		     
		     $table->id();
		     $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
		$table->string('title');
		     $table->longtext('content');
		     $table->mediumInteger('likes')->default(0);
		     $table->mediumInteger('reports')->default(0);

		$table->string('image');
	
            $table->timestamps();
	    });

	    Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
