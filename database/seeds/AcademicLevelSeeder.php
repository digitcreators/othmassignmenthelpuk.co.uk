<?php

use App\AcademicLevel;
use Illuminate\Database\Seeder;

class AcademicLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicLevel::insert([
        [
            'name'=>'High School'
        ],
        [
            'name'=>'Undergraduate'
        ],
        [
            'name'=> "Master"
        ],
        [
            'name'=> "Phd"
        ],
        [
            'name'=> "Admission"
        ],
        
    ]);
}
}
