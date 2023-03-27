<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// model
use App\Models\Technology;

// helpers
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'Html',
            'Css',
            'Javascript',
            'Php',
            'Laravel',
            'Bootstrap',
            'VueJs'
        ];

        foreach ($technologies as $technology) {
            $newTechnology = Technology::create([
                'name' => $technology,
                'slug' => Str::slug($technology),
            ]);
        }
    }
}
