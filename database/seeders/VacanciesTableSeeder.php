<?php

namespace Database\Seeders;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Vacancy;
use App\Models\Skill;

class VacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacancies')->insert([
            'id' => Uuid::generate(),
            'title' => 'React Developer',
            'description' => 'Wij zijn op zoek naar een skillvolle React Developer voor ons team.',
            'deadline' => now(),
            'code' => Uuid::generate(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $vacancy = Vacancy::get()->last();
        $skills = ['html', 'css'];
        foreach ($skills as $skill) {
            $skill = Skill::where('skill', '=', $skill)->first();
            $vacancy->assignSkill($skill);
        }


        DB::table('vacancies')->insert([
            'id' => Uuid::generate(),
            'title' => 'Lead UI designer',
            'description' => 'Wij zijn op zoek naar een getalenteerde leider voor ons team.',
            'deadline' => now(),
            'code' => Uuid::generate(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $vacancy = Vacancy::get()->last();
        $skills = ['javascript', 'react', 'vue'];
        foreach ($skills as $skill) {
            $skill = Skill::where('skill', '=', $skill)->first();
            $vacancy->assignSkill($skill);
        }

        DB::table('vacancies')->insert([
            'id' => Uuid::generate(),
            'title' => 'Graphic designer',
            'description' => '',
            'code' => Uuid::generate(),
            'deadline' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $vacancy = Vacancy::get()->last();
        $skills = ['php', 'laravel'];
        foreach ($skills as $skill) {
            $skill = Skill::where('skill', '=', $skill)->first();
            $vacancy->assignSkill($skill);
        }

    }
}
