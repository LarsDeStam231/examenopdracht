<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrankSubdrankItemTables extends Migration
{
    public function up()
    {
            // Maak de 'Drank' tabel
            Schema::create('drank', function (Blueprint $table) {
                $table->id();
                $table->string('dranknaam');
                $table->string('drankkort', 2)->unique(); // Zorg ervoor dat drankkort uniek is
                $table->timestamps();
            });
        
            // Maak de 'Subdrank' tabel
            Schema::create('subdrank', function (Blueprint $table) {
                $table->id();
                $table->string('subdranknaam');
                $table->string('subdrankkort', 2)->unique();
                $table->string('drankkort', 2);
                $table->foreign('drankkort')->references('drankkort')->on('drank')->onDelete('cascade'); // Voeg foreign key constraint toe
                $table->timestamps();
            });
        
            // Maak de 'Item' tabel
            Schema::create('item', function (Blueprint $table) {
                $table->id();
                $table->string('itemnaam');
                $table->decimal('itemprijs', 10, 2);
                $table->string('subdrankkort', 2);
                $table->foreign('subdrankkort')->references('subdrankkort')->on('subdrank')->onDelete('cascade'); // Voeg foreign key constraint toe
                $table->timestamps();
            });
     }
        
 

    public function down()
    {
        Schema::dropIfExists('item');
        Schema::dropIfExists('subdrank');
        Schema::dropIfExists('drank');
    }
}

