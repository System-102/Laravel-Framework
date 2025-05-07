<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Workout;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workout::create([
            'title' => 'Strength Training',
            'description' => 'Build muscle and increase endurance.',
            'image' => 'strength.webp',
            'color' => 'orange'
        ]);
    }
}
