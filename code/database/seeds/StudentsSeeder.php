<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('students')->count();

        if (!$users) {
            \DB::table('students')->truncate();
            \DB::table('students')->insert(['first_name' => 'Clark', 'last_name' => 'Kent']);
            \DB::table('students')->insert(['first_name' => 'Peter', 'last_name' => 'Parker']);                
        }
    }
}
