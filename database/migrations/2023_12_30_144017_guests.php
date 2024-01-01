<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('is_attending')->default(0);
            $table->timestamps();
        });

        $guestNames = [
            'Clara Coswosck',
            'Gabryella Pompealgumacoisa',
            'Mateus Coswosck',
            'Moisés Coswosck',
            'Letícia Coswosck',
            'Júlia De Angeli',
            'Samara Maforte',
            'Letícia Azevedo',
            'Lucas Caldeira',
            'Cicero Belchior',
            'Arthur do Cícero',
            'Marianna Cattoni',
            'Jota namorado da Marianna',
            'Daniel Alef',
            'Sthefany Iotti',
            'Matheus Iotti',
            'Túlio Coutinho',
            'Natália Showenck',
            'Mateus Chagas',
            'Lucas Queiroz',
            'Larissa Queiroz',
            'Maria Eduarda Carlette',
            'Giordan Garcia',
            'Clara Siller',
            'Gabriel Louzada',
            'Luis Zanoni',
            'Lavínia Passos',
            'Jane Mombrini Feletti',
            'Artelino Feletti Jr',
            'Simone Feletti',
            'Luiz Teixeira',
            'Pietra Feletti Teixeira',
            'Ludmilla Feletti Teixeira',
            'Vanessa Feletti',
            'Beatriz Feletti Pinheiro',
            'Lara Pinheiro',
            'João Pedro Marques Mombrini',
            'Jessica Mayara Mombrini',
            'Jaqueline Mombrini',
            'Sarah Mombrini',
            'Ludmilla Barbosa'
        ];

        usort($guestNames, function($a, $b) {
            return strcmp($a, $b);
        });

        $guestList = array_map(function($name) {
            return ['name' => $name, 'is_attending' => false, 'created_at' => now(), 'updated_at' => now()];
        }, $guestNames);

        DB::table('guests')->insert($guestList);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};