<?php

use App\PaperType;
use Illuminate\Database\Seeder;

class PaperTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaperType::insert([
            [
                "id"    =>  1,
                "name"  =>  "Essay",
            ],
            [
                "id"    =>  2,
                "name"  =>  "Book Report",
            ],
            [
                "id"    =>  3,
                "name"  =>  "Research Paper",
            ],
            [
                "id"    =>  4,
                "name"  =>  "Term Paper",
            ],
            [
                "id"    =>  5,
                "name"  =>  "Thesis",
            ],
            [
                "id"    =>  6,
                "name"  =>  "Dissertation",
            ],
            [
                "id"    =>  7,
                "name"  =>  "Course Work",
            ],
            [
                "id"    =>  8,
                "name"  =>  "Thesis Proposal",
            ],
            [
                "id"    =>  9,
                "name"  =>  "Research Proposal",
            ],
            [
                "id"    =>  10,
                "name"  =>  "Dissertation Proposal",
            ],
            [
                "id"    =>  11,
                "name"  =>  "Assignment",
            ],
            [
                "id"    =>  12,
                "name"  =>  "Other",
            ],
                        
        ]);
    }
}
