<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10 ; $i++){
            $newProject= new Project();
            $newProject->name = $faker->sentence(3);
            $newProject->summary = $faker->text(100);
            $newProject->slug = Str::slug($newProject->name,'-');
            $newProject->client_name = $faker->firstname();
            $newProject->save();
        }    
        
    }
}
