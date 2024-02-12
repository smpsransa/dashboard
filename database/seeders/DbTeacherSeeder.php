<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DbTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        foreach (range(1, 18) as $index) {
            $gender = $faker->randomElement(['male', 'female']);

            DB::table('db_teachers')
                ->insert([
                    'class_id' => $index,
                    'name' => $faker->name($gender),
                    'gender' => $gender
                ]);

            DB::table('db_classes')
                ->where('id', $index)
                ->update([
                    'hr_teacher' => $index
                ]);
        }
    }
}
