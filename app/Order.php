<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Order extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable=['id',
    'name'
    ,'email'
    ,'phone'
    ,'subject'
    ,'country'
    ,'academic_level'
    ,'paper_type'
    ,'deadline'
    ,'paper_topic'
    ,'subject',
    'no_of_references'
    ,'number_of_pages'
    ,'number_of_slides'
    ,'number_of_posters'
    ,'reference_style'
    ,'detail'
    // ,'spacing'
    ,'is_complete'
    ,'cost_per_page'
    ,'cost_per_slide'
    ,'cost_per_poster'
    ,'total_price',
    "academic_level_id",
        "deadline_id",
    'user_id',
    'status_id',
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function careerLevel()
    {
        return $this->belongsTo(AcademicLevel::class );
    }

    public function packageOrder()
    {
        return $this->belongsTo(Subject::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function deadlineOrder()
    {
        return $this->belongsTo(Deadline::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function status(){
        return $this->belongsTo(Status::class,'status_id','id');
    }


}
