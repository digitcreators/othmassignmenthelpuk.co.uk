<?php

use App\Fare;
use Illuminate\Database\Seeder;

class FareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::insert([
            //highschool
            ['academic_level_id'=>1,
             'deadline_id'=>1,
             'per_page_price'=>30        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>2,
             'per_page_price'=>35        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>3,
             'per_page_price'=>45        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>4,
             'per_page_price'=>50        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>5,
             'per_page_price'=>55        
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>6,
             'per_page_price'=>60       
            ],
            ['academic_level_id'=>1,
            'deadline_id'=>7,
            'per_page_price'=>65        
           ],
           ['academic_level_id'=>1,
           'deadline_id'=>8,
           'per_page_price'=>75       
          ],
          ['academic_level_id'=>1,
          'deadline_id'=>9,
          'per_page_price'=>95        
         ],
         ['academic_level_id'=>1,
          'deadline_id'=>10,
          'per_page_price'=>105        
         ],
         ['academic_level_id'=>1,
         'deadline_id'=>11,
         'per_page_price'=>145      
        ],
        ['academic_level_id'=>1,
         'deadline_id'=>12,
         'per_page_price'=>185      
        ],

        //undergraduate

        ['academic_level_id'=>2,
        'deadline_id'=>1,
        'per_page_price'=>40        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>2,
        'per_page_price'=>45        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>3,
        'per_page_price'=>55        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>4,
        'per_page_price'=>60        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>5,
        'per_page_price'=>65        
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>6,
        'per_page_price'=>70        
       ],
       ['academic_level_id'=>2,
       'deadline_id'=>7,
       'per_page_price'=>75       
      ],
      ['academic_level_id'=>2,
      'deadline_id'=>8,
      'per_page_price'=>85        
     ],
     ['academic_level_id'=>2,
     'deadline_id'=>9,
     'per_page_price'=>105        
    ],
    ['academic_level_id'=>2,
     'deadline_id'=>10,
     'per_page_price'=>115        
    ],
    ['academic_level_id'=>2,
    'deadline_id'=>11,
    'per_page_price'=>160       
   ],
   ['academic_level_id'=>2,
    'deadline_id'=>12,
    'per_page_price'=>175       
   ],

    // master
    [
        'academic_level_id'  => 3, // master
        'deadline_id'        => 1, // 15 or more days
        'per_page_price'     => 50
     ],
     [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 2, // 10 days
         'per_page_price'     => 55
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 3, // 7 days
         'per_page_price'     => 65
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 4, // 6 days
         'per_page_price'     => 70
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 5, // 5 days
         'per_page_price'     =>75
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 6, // 4 days
         'per_page_price'     => 80
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 7, // 3 days
         'per_page_price'     => 85
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 8, // 2 days
         'per_page_price'     => 95
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 9, // 1 days
         'per_page_price'     => 115
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 10, // 12 hours
         'per_page_price'     => 125
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 11, // 6 hours
         'per_page_price'     => 165
      ],
      [
        'academic_level_id'  => 3, // master
        'deadline_id'        => 12, // 6 hours
        'per_page_price'     => 185
     ],

       // phd
       [
         'academic_level_id'  => 4, // master
         'deadline_id'        => 1, // 15 or more days
         'per_page_price'     => 60
      ],
      [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 2, // 10 days
          'per_page_price'     => 65
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 3, // 7 days
          'per_page_price'     => 75
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 4, // 6 days
          'per_page_price'     => 80
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 5, // 5 days
          'per_page_price'     =>85
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 6, // 4 days
          'per_page_price'     => 90
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 7, // 4 days
          'per_page_price'     => 95
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 8, // 2 days
          'per_page_price'     => 105
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 9, // 1 days
          'per_page_price'     => 125
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 10, // 12 hours
          'per_page_price'     => 135
       ],
       [
          'academic_level_id'  => 4, // master
          'deadline_id'        => 11, // 6 hours
          'per_page_price'     => 175
       ],
       [
         'academic_level_id'  => 4, // master
         'deadline_id'        => 12, // 6 hours
         'per_page_price'     => 195
      ],

      // Admission
             [
               'academic_level_id'  => 5, // master
               'deadline_id'        => 1, // 15 or more days
               'per_page_price'     => 70
            ],
            [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 2, // 10 days
                'per_page_price'     => 75
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 3, // 7 days
                'per_page_price'     => 85
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 4, // 6 days
                'per_page_price'     => 90
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 5, // 5 days
                'per_page_price'     =>95
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 100
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 7, // 5 days
                'per_page_price'     => 105
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 8, // 2 days
                'per_page_price'     => 115
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 9, // 1 days
                'per_page_price'     => 135
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 10, // 12 hours
                'per_page_price'     => 145
             ],
             [
                'academic_level_id'  => 5, // master
                'deadline_id'        => 11, // 6 hours
                'per_page_price'     => 185
             ],
             [
               'academic_level_id'  => 5, // master
               'deadline_id'        => 12, // 6 hours
               'per_page_price'     => 205
            ],
        
        ]);
    }
}
