<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->json('name');
            $table->json('meta_title');
            $table->json('meta_description');
            $table->string('slug')->index();
            $table->json('images')->nullable();
            $table->json('short_description')->nullable();
            $table->json('description')->nullable();
            $table->decimal('price', 20, 8);
            $table->decimal('old_price', 20, 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
