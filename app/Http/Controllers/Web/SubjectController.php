<?php

namespace App\Http\Controllers\Web;

use App\Service;
use App\PaperType;
use App\AcademicLevel;
Use App\Deadline;
use App\Http\Controllers\Controller;
use App\WebSetting;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function accounting_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.accounting-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }


    public function business_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.business-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }


    public function programming_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.programming-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function it_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.it-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function computer_science_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.computer-science-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function economics_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.economics-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function education_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.education-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function media_and_communication_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.media-and-communication-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function english_literature_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.english-literature-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function finance_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.finance-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function geography_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.geography-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function history_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.history-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function nursing_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.nursing-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function psychology_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.psychology-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function management_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.management-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function high_school_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.high-school-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function philosophy_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.philosophy-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function tefl_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.tefl-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function marketing_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.marketing-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function kaplan_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.kaplan-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function fashion_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.fashion-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function pgce_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.pgce-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function svq_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.svq-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function tableau_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.tableau-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function tquk_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.tquk-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function healthcare_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.healthcare-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function engineering_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.engineering-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function statistics_assignment_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.statistics-assignment-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function capstone_project_writing_service ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.capstone-project-writing-service', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    public function academic_poster_making_help ()
    {
          //  return 'msg';
          $paper_types = PaperType::all();
          $academic_levels = AcademicLevel::orderBy('id','asc')->get();
          $deadlines = Deadline::orderBy('id','asc')->get();
          $services=Service::all();
          $web_setting=WebSetting::first();
  

        return view('pages.subjects.academic-poster-making-help', compact( 
            'services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
   
    
    
}











