<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 100; $i++) { 
            DB::table('clientes')->insert([
                'cliente' => Str::random(10),
                'cpf' => random_int(100, 999) . random_int(100,999) . random_int(100, 999) . random_int(10, 99),
                'dataNascimento' => '2007-10-27',
                'estado' => Str::random(2),
                'cidade' => Str::random(10),
                'sexo' => random_int(0, 1)
            ]);
        }
    }
}
