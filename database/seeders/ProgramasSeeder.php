<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
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
                'codPrograma' => '10',
                'nomPrograma' => 'Sistemas'
            ],
            [
                'codPrograma' => '20',
                'nomPrograma' => 'Civil'
            ],
            [
                'codFacultad' => '30',
                'nomPrograma' => 'Electronica'
            ]
        ];
        DB::table('programas')->insert($datos);
    }
}