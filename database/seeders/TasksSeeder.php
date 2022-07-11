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
                "title" => "خرید کردن",
                "description" => "regrehrthjtyjtyjyujkyu",
                "categoryID" => 1,
		    ],
	    ]);

        DB::table("tasks")->insert([
		    [
			    "id" => 2,
                "title" => "rgburegoi",
                "description" => "trhrhjtyjytjtjtyj",
                "categoryID" => 1,
		    ],
	    ]);

        DB::table("tasks")->insert([
		    [
			    "id" => 3,
                "title" => "rgburregtrehgregoi",
                "description" => "trhrhjgergehehtyjytjtjtyj",
                "categoryID" => 3,
		    ],
	    ]);
    }
}
