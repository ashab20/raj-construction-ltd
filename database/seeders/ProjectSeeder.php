<?php

namespace Database\Seeders;

use App\Models\Projects\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project =  [
            [
                'project_name' => 'Sunmar',
                'start_date'=> 2022-11-21,
                'end_date' => 2025-11-21,
                'stage_id' => 1,
                'user_id' => 7,
                'created_by' => 7,
                'status' => 1,
            ],
            [
                'project_name' => 'Dhaka',
                'start_date'=> 2022-11-21,
                'end_date' => 2025-11-21,
                'stage_id' => 1,
                'user_id' => 7,
                'created_by' => 7,
                'status' => 1,
            ],
            [
                'project_name' => 'Dhaka',
                'start_date'=> 2022-11-21,
                'end_date' => 2025-11-21,
                'stage_id' => 1,
                'user_id' => 7,
                'created_by' => 7,
                'status' => 1,
            ],
            [
                'project_name' => 'Dhaka',
                'start_date'=> 2022-11-21,
                'end_date' => 2025-11-21,
                'stage_id' => 1,
                'user_id' => 7,
                'created_by' => 7,
                'status' => 1,
            ],
            [
                'project_name' => 'Dhaka',
                'start_date'=> 2022-11-21,
                'end_date' => 2025-11-21,
                'stage_id' => 1,
                'user_id' => 7,
                'created_by' => 7,
                'status' => 1,
            ],
            [
                'project_name' => 'Dhaka',
                'start_date'=> 2022-11-21,
                'end_date' => 2025-11-21,
                'stage_id' => 1,
                'user_id' => 7,
                'created_by' => 7,
                'status' => 1,
            ],
            [
                'project_name' => 'Dhaka',
                'start_date'=> 2022-11-21,
                'end_date' => 2025-11-21,
                'stage_id' => 1,
                'user_id' => 7,
                'created_by' => 7,
                'status' => 1,
            ],
        ];
        foreach ($project as $key => $value) {

            Project::create($value);
        }
    }
}
