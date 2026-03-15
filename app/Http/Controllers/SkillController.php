<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function hardcoded() {
        return [
            ['name' => 'PHP', 'level' => '5'],
            ['name' => 'Laravel', 'level' => '4'],
            ['name' => 'Vue', 'level' => '4'],
            ['name' => 'TypeScript', 'level' => '3'],
            ['name' => 'Dedication', 'level' => '>9000']
        ];
    }

    public function index() {
        return Skill::all();
    }
}
