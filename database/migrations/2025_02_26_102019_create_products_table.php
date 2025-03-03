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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->integer('quantity');
            $table->longText('description')->nullable();
            $table->boolean('inStock')->default(0);
            $table->softDeletes();
            $table->foreignId(User::class, 'deleted_by')->nullable();
            $table->softAdds();
            $table->foreignId(User::class, 'added_by')->nullable();
            $table->softEdits();
            $table->foreignId(User::class, 'edited_by')->nullable();
            $table->foreignId(User::class, 'updated_by')->nullable();
            $table->foreignId(Brand::class, 'brand_id')->nullable();
            $table->foreignId(Category::class, 'category_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
