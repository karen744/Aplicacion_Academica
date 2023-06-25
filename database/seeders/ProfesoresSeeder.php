<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'codPrograma' => '123',
                'nomPrograma' => 'Luis Chavez'
            ],
            [
                'codPrograma' => '202',
                'nomPrograma' => 'Carlos Rodriguez'
            ]
        ];
        DB::table('profesors')->insert($datos);
    }
}
