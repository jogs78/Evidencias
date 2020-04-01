<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'control' => '11270000',
            'nombre' => '11 Estudiante',
            'apellidos' => ' del 11',
        ]);
        
        DB::table('docentes')->insert([
            'control' => '12270000',
            'nombre' => '12 Estudiante',
            'apellidos' => ' del 12',
        ]);
        
        DB::table('docentes')->insert([
            'control' => '13270000',
            'nombre' => '13:_gbn h Estudiante',
            'apellidos' => ' del 12',
        ]);
        
        
    }
}
