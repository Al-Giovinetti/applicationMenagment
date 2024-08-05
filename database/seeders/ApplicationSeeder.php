<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jobApplication;

use Faker\Generator as Faker;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $possibleLocations = ['Pisa','Firenze','Milano','Remote'];
        $possibleSkills = ['HTML', 'CSS', 'JS', 'PHP', 'JAVA', 'C#'];

        for($i=0; $i<10; $i++){

            $skillKeys = array_rand($possibleSkills, 3);
            $jobskill='';
            foreach($skillKeys as $key){
                $jobskill .= $possibleSkills[$key].' ';
            }

            $newJobAppliaction = new jobApplication();
            $newJobAppliaction->agency_name = $faker->company();
            $newJobAppliaction->agency_place = $possibleLocations[array_rand($possibleLocations)];
            $newJobAppliaction->skills = trim($jobskill, " ");
            $newJobAppliaction->extra_info = $faker->sentence();
            $newJobAppliaction->save();
            
        }
    }
}
