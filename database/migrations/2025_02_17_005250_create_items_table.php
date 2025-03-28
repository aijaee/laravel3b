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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('category_id')->index();
            $table->string('name');
            //$table->string('item_name');
            $table->decimal('price',10,2);
            //$table->integer('qty',0);
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')->on('items')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
