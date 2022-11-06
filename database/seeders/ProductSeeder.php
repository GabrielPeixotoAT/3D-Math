<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Product')->insert(array(
            array(
                'Name' => 'Esferas',
                'Price' => 50,
                'Description' => 'Esferas sólidas para estudo',
                'NumberOfSales' => 13,
                'CategoryIDFK' => 1,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Name' => 'Parabolóides',
                'Price' => 120,
                'Description' => 'Parabolóides sólidos para estudo',
                'NumberOfSales' => 23,
                'CategoryIDFK' => 2,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Name' => 'Trapezóides',
                'Price' => 60,
                'Description' => 'Trapezios sólidos para estudo',
                'NumberOfSales' => 9,
                'CategoryIDFK' => 1,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Name' => 'Pirâmides',
                'Price' => 60,
                'Description' => 'Pirâmides transparentes para estudo. Feitas com PET.',
                'NumberOfSales' => 9,
                'CategoryIDFK' => 1,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Name' => 'Cubos',
                'Price' => 60,
                'Description' => 'Cubos transparentes para estudo. Feitos com PET.',
                'NumberOfSales' => 9,
                'CategoryIDFK' => 1,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            )
            
        ));
    }
}
