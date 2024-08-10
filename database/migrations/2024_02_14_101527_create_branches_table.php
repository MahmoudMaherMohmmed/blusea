<?php

use App\Enums\BranchStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('address');
            $table->text('google_map')->nullable();
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('telephone_number');
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->boolean('status')->default(BranchStatusEnum::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
