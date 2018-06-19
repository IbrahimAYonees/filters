<?php

use Illuminate\Database\Seeder;
use App\CourseUser;

class CoursesUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CourseUser::class,6)->create();
    }
}
