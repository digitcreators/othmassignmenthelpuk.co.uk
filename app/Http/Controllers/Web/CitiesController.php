<?php

namespace App\Http\Controllers\Web;

use App\Service;
use App\PaperType;
use App\AcademicLevel;
Use App\Deadline;
use App\Http\Controllers\Controller;
use App\WebSetting;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function create(){
        $services = Service::orderBy('name', 'ASC')->get();
        return $services;
    }
    public function manchester()
    {

        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.manchester', compact('services','deadlines','academic_levels','paper_types','web_setting'));


    }
    public function sheffield()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.sheffield', compact('services','deadlines','academic_levels','paper_types','web_setting'));


    }
    public function swansea()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.swansea', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function birmingham()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.birmingham', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function liverpool()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.liverpool', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function london()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.london', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function edinburgh()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.edinburgh', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function southampton()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.southampton', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function leicester()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.leicester', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function aberdeen()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.aberdeen', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function coventry()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.coventry', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function newcastle()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.newcastle', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function brighton()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.brighton', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function bristol()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.bristol', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function cardiff()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.cardiff', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function croydon()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.croydon', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function glasgow()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.glasgow', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function leeds()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.leeds', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function nottingham()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.nottingham', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function plymouth()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.plymouth', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function oxford()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.oxford', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function bradford()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.bradford', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function winchester()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.winchester', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function canterbury()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.canterbury', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function cambridge()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.cambridge', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function chelmsford()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.chelmsford', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function buckingham()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.buckingham', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function bournemouth()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.bournemouth', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function luton()
    {
        //  return 'msg';
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $web_setting=WebSetting::first();
        return view('pages.cities.luton', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    
}
