<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(['name' => 'Service AC', 'image' => 'service_AC.jpg']);
        Service::create(['name' => 'Service Kulkas', 'image' => 'service_kulkas.jpg']);
        Service::create(['name' => 'Service Mesin Cuci', 'image' => 'service_mesin_cuci.jpg']);
    }
}
