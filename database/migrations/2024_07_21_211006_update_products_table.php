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
        Schema::table('products', function (Blueprint $table) {
            $table->integer('starting_inventory')->comment('Starting Inventory')->default(0);
            $table->integer('inventory_received')->comment('Inventory Received')->default(0);
            $table->integer('inventory_shipped')->comment('Inventory Shipped')->default(0);
            $table->integer('minimum_quantity_required')->comment('Minimum Quantity Required')
            ->default(0);
            $table->integer('quantity_in_stock')->comment('Quantity In Stock')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
