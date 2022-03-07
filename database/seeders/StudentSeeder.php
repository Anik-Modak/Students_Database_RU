<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Student::create([
                's_id'   => $faker->id
                'name'   => $faker->name,
                'dept'   => $faker->dept,
                'address'=> $faker->address,
                'phone'  => $faker->phone,
            ]);
        }
    }
}
