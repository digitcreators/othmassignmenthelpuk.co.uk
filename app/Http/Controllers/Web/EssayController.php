<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Service;
use App\PaperType;
use App\AcademicLevel;
Use App\Deadline;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    //

    public function scholarship (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.scholarship',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function psychology (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.psychology',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function reflective  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.reflective',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function sociology  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.sociology',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function art  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.art',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function religion  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.sociology',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function history  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.sociology',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function argumentataive  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.sociology',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function psychology  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.sociology',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function political-science  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.political-science',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function business  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.business',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function graduate  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.graduate',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function economics  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.economics',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function finance  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.finance',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function persuasive  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.persuasive',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function narrative  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.narrative',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function expository  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.expository',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function descriptive  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.descriptive',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function analytical  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.analytical',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function biology  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.biology',  compact('services','deadlines','academic_levels','paper_types'));
    }
    public function spanish  (){
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();

        return view('pages.essay.spanish',  compact('services','deadlines','academic_levels','paper_types'));
    }
}
