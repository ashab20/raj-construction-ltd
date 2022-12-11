<?php

namespace Database\Seeders;

use App\Models\Builder\BuilderOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuilderOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $builderOption=[
            [
                'name' => 'Constructions.',
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'name' => 'Electricity.',
                'status' => 1,
                'created_by' => 2,
            ],
            [
                'name' => 'Plumbing.',
                'status' => 1,
                'created_by' => 3,
            ],
        ];
        foreach($builderOption as $key => $value){
            BuilderOption::create($value);
        }
    }
}
