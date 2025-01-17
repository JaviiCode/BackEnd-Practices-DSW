<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::factory()->count(25)->hasFacturas(10)->create();
        Cliente::factory()->count(100)->hasFacturas(3)->create();
        Cliente::factory()->count(50)->hasFacturas(1)->create();
        Cliente::factory()->count(10)->create();
    }
}
