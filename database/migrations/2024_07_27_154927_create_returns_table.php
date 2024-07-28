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
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('return_code')->nullable();
            $table->enum('status', ['Pending', 'Approved', 'Rejected','Complete'])
            ->default('Pending')->comment('Complete => Paid');
            $table->foreignIdFor(App\Models\User::class)->constrained()->nullable();
            $table->foreignIdFor(\App\Models\Order::class)
                ->constrained()->nullable();
            $table->foreignIdFor(\App\Models\Supplier::class)->constrained()->nullable();    
            $table->foreignIdFor(\App\Models\Purchase::class)
                ->constrained()->nullable();
            $table->text('reasons')->nullable();
            $table->string('return_date');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returns');
    }
};
