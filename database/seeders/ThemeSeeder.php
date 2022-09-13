<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::insert([

        	"primary_color" => "#0000FF",
        	"secondery_color" => "#8000FF",
        	"bg_color" => "#000",
        	"text_color" => "#fff"
        ]);
    }
}
