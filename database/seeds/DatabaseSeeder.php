<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(PoblarUsuarios::class);
        $this->PoblarUsuarios();
    }

    public function PoblarUsuarios()
    {
        DB::table('users')->insert([
            'name' => 'Jorge Octavio Guzmán Sánchez',
            'email' => 'jguzman@ittg.edu.mx',
            'password' => bcrypt('pasopaso'),
            'rol' => 'docente',
        ]);        
        DB::table('users')->insert([
            'name' => 'Sergio Guzmán Sánchez',
            'email' => 'sguzman@ittg.edu.mx',
            'password' => bcrypt('pasopaso'),
            'rol' => 'docente',
        ]);        

        DB::table('users')->insert([
            'name' => 'Estudainte 1 Guzmán Sánchez',
            'email' => 'e1guzman@ittg.edu.mx',
            'password' => bcrypt('pasopaso'),
            'rol' => 'estudiante',
        ]);        
        DB::table('users')->insert([
            'name' => 'Estudainte 2 Guzmán Sánchez',
            'email' => 'e2guzman@ittg.edu.mx',
            'password' => bcrypt('pasopaso'),
            'rol' => 'estudiante',
        ]);        
        DB::table('users')->insert([
            'name' => 'Estudainte 3 Guzmán Sánchez',
            'email' => 'e3guzman@ittg.edu.mx',
            'password' => bcrypt('pasopaso'),
            'rol' => 'estudiante',
        ]);        

    }

}
