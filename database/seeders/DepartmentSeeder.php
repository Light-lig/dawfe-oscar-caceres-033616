<?php

namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = [
            ['departmen_name' =>  'Ahuachapán'],
            ['departmen_name' =>  'Santa Ana'],
            ['departmen_name' =>  'Sonsonate'],
            ['departmen_name' =>  'La Libertad'],
            ['departmen_name' =>  'Chalatenango'],
            ['departmen_name' =>  'San Salvador'],
            ['departmen_name' =>  'Cuscatlán'],
            ['departmen_name' =>  'La Paz'],
            ['departmen_name' =>  'Cabañas'],
            ['departmen_name' =>  'San Vicente'],
            ['departmen_name' =>  'Usulután'],
            ['departmen_name' =>  'Morazán'],
            ['departmen_name' =>  'San Miguel'],
            ['departmen_name' =>  'La Unión'],
        ];
        foreach ($departamentos as $dep) {
            Department::create($dep);
        }
    }
}
