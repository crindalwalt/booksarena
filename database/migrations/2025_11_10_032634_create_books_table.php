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
            $table->string("category");
            $table->string("excerpt");
            $table->longText("description");
            $table->string("featured_image");
            $table->double("rating")->default(4.5);


            $table->double("price");
            $table->double("old_price")->nullable();
            $table->integer("quantity");


            $table->string("publisher");
            $table->string("language");
            $table->string("ISBN");
            $table->string("dimensions");
            $table->string("weight");
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
