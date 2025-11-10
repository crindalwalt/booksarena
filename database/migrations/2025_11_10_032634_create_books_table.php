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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("excerpt");
            $table->longText("description");
            $table->string("featured_image");
            $table->double("rating")->default(4.5);

            $table->integer("pages");
            $table->string("edition");

            $table->string("author_id");

            $table->enum("status",["disabled", "active"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
