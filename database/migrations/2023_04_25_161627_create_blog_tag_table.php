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
        Schema::create('blog_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')
                ->constrained(
                    table: 'blogs', indexName: 'blog_tag.blog_id'
                )
                ->onDelete('cascade');
            $table->foreignId('tag_id')
                ->constrained(
                    table: 'tags', indexName: 'blog_tag.tag_id'
                )
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_tag');
    }
};
