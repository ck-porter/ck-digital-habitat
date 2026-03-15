<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('skills')->insert([
           ['name' => 'Communication', 'level' => 5],
            ['name' => 'Collaboration', 'level' => 5],
            ['name' => 'Ownership', 'level' => 5],
            ['name' => 'Problem Solving', 'level' => 5],
            ['name' => 'Adaptability', 'level' => 4],
            ['name' => 'Learning Mindset', 'level' => 5],
        ]);
    }
}
