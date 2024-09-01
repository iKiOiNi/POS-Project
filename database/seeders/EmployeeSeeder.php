<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory()->count(5)->create([
            'role' => 'manager',
        ]);

        // Create 10 cashiers
        Employee::factory()->count(10)->create([
            'role' => 'cashier',
        ]);
    }
}
