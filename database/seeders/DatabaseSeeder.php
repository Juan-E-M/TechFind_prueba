<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Usuario::factory(10)->create();
        \App\Models\Categoria::factory(10)->create();
        \App\Models\Contacto::factory(10)->create();
        \App\Models\Producto::factory(10)->create();
        \App\Models\Negocio::factory(10)->create();
        \App\Models\Detallenegocio::factory(10)->create();
        \App\Models\Comentarionegocio::factory(10)->create();
        \App\Models\Comentarioproducto::factory(10)->create();
    }
}
