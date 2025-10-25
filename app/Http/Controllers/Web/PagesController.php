<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PagesController extends Controller
{
    public function index(){
        $paper_types=PaperType::orderBy('id', 'ASC')->get();
        $academic_levels=AcademicLevel::orderBy('id','ASC')->get();
        $deadlines=Deadline::orderBy('id','ASC')->get();
        $web_setting=WebSetting::first();
        $services = Service::orderBy('name', 'ASC')->get(); // Fetch services
        return view('pages.home',compact('paper_types','academic_levels','deadlines','web_setting','services'));
    }

   public function price(){
    // Fetch unique academic levels and deadlines
        $academicLevels = AcademicLevel::orderBy('id','ASC')->get();
        $deadlines = Deadline::orderBy('id','ASC')->get();
    
        // Fetch fares with related data
        $fares = Fare::all();
    
        return view('pages.pricing', compact('academicLevels', 'deadlines', 'fares'));
    }


    public function about(){
        //  Artisan::call('cache:clear');
        //  Artisan::call('config:cache');
        //  Artisan::call('optimize');
        //  dd("Cache is cleared");
         
        return view('pages.about');
    }
    
    public function samples(){
       
        return view('pages.samples');
    }

    public function sitemap(){
        $services=Service::all();
        $web_setting=WebSetting::first();
        
        return view('pages.legal.sitemap' ,compact('services','web_setting'));
    }

    public function getFare(Request $request)
    {   
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();
            
    }
    
    public function refund_policy ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.refund-policy', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function revision_policy ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.revision-policy', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
}
