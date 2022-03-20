<?php

namespace Database\Seeders;

use App\Models\categoria;
use App\Models\estudiante;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //desactivar orden de construccion de llaves foraneas
        Schema::disableForeignKeyConstraints();
        //llamamos a los modelos
        categoria::truncate();
        estudiante::truncate();
        Schema::enableForeignKeyConstraints(); //volvemos a activar el orden de las llaves foraneas

        //llamo a la clase seeder que cree
        $this->call(categoriaSeeder::class);
        $this->call(estudianteSeeder::class);
    }
}
