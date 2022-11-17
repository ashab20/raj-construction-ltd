<?php

namespace Database\Seeders;

use App\Models\Builder\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations =  [
            [
                'designation' => 'Senior Real Estate Specialist® (SRES®)',
                'created_by' => 1,
                'status' => 1,
            ],
            [
                'designation' => 'Seller Representative Specialist (SRS)',
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'designation' => 'Accredited Buyer’s Representative (ABR®)',
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'designation' => 'Certified Real Estate Brokerage Manager (CRB)',
                'created_by' => 1,
                'status' => 1,
            ],
            [
                'designation' => 'Certified Residential Specialist (CRS)',
                'created_by' => 1,
                'status' => 1,
            ],
            [
                'designation' => 'Military Relocation Professional (MRP)',
                'created_by' => 1,
                'status' => 1,
            ],
        ];


        foreach ($designations as $key => $value) {

            Designation::create($value);
        }
    }
}
