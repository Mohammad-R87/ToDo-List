<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tasks")->insert([
		    [
			    "id" => 1,
                "title" => "Go shopping",
                "description" => "I go to the store at 5 pm",
                "category_id" => 1,
		    ],
	    ]);

        DB::table("tasks")->insert([
		    [
			    "id" => 2,
                "title" => "Studying",
                "description" => "I study for 2 hours",
                "category_id" => 1,
		    ],
	    ]);

        DB::table("tasks")->insert([
		    [
			    "id" => 3,
                "title" => "rest",
                "description" => "I rest from 3 to 5 in the afternoon",
                "category_id" => 1,
		    ],
	    ]);
    }
}
