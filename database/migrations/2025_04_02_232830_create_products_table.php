<?php

use App\Enums\ProductSpecialEnum;
use App\Enums\ProductStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('title');
            $table->longText('short_description');
            $table->longText('description');
            $table->json('colors');
            $table->float('price');
            $table->float('price_after_discount')->nullable();
            $table->boolean('special')->default(ProductSpecialEnum::NO->value);
            $table->boolean('best_seller')->default(ProductSpecialEnum::NO->value);
            $table->boolean('status')->default(ProductStatusEnum::ACTIVE->value);
            $table->timestamps();
            $table->softDeletes();
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
