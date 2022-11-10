<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('archive')->insert(array(
            array(
                'Address' => '../images/modelos_esferas.png',
                'ProductIDFK' => 1,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Address' => '../images/modelos_parabuloides.png',
                'ProductIDFK' => 2,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Address' => '../images/modelos_trapesoides.png',
                'ProductIDFK' => 3,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Address' => '../images/modelos_piramides.png',
                'ProductIDFK' => 4,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            ),
            array(
                'Address' => '../images/modelos_cubos.png',
                'ProductIDFK' => 5,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s')
            )
            
        ));
    }
}
