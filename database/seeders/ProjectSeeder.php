<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_project = new Project();
            $new_project->nome = $faker->sentence(3);
            $new_project->slug = Str::slug($new_project->nome, '-');
            $new_project->programma = $faker->company();
            $new_project->data = $faker->dateTime();
            $new_project->descrizione = $faker->paragraph();
            $new_project->save();
        }
    }
}
