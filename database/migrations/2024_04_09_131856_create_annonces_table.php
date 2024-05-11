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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("image");
            $table->string("localisation");
            $table->string("nbreChambres");
            $table->string("nbreBains");
            $table->string("surface");
            $table->string("prix");
            $table->unsignedBigInteger("id_categorie");
            $table->unsignedBigInteger("id_user");
            $table->timestamps();

            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
