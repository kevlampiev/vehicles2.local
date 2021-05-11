<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->insert($this->getData());
    }

    private function getData(): array
    {
        return [
            ['name'=>'Экскаватор'],
            ['name'=>'Карьерный самосвал'],
            ['name'=>'Бульдозер'],
            ['name'=>'Грейдер'],
            ['name'=>'Буровая установка'],
            ['name'=>'Stellar'],
        ];
    }
}
