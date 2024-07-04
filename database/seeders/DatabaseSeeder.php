<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('duenios')->insert([
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'correo' => 'juan@example.com', 'telefono' => '123456789'],
            ['nombre' => 'Ana', 'apellido' => 'García', 'correo' => 'ana@example.com', 'telefono' => '987654321'],
            ['nombre' => 'Luis', 'apellido' => 'Martínez', 'correo' => 'luis@example.com', 'telefono' => '456789123'],
        ]);
    
        DB::table('propiedades')->insert([
            ['piso' => 1, 'area' => 100.0, 'color' => 'Rojo', 'idDuenio' => 1],
            ['piso' => 2, 'area' => 120.0, 'color' => 'Azul', 'idDuenio' => 2],
            ['piso' => 3, 'area' => 150.0, 'color' => 'Verde', 'idDuenio' => 3],
        ]);
    }
}
