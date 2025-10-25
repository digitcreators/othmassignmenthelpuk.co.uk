<?php

namespace App\Http\Controllers\Web;

use App\Service;
use App\PaperType;
use App\AcademicLevel;
Use App\Deadline;
use App\Http\Controllers\Controller;
use App\WebSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        $services = Service::orderBy('name', 'ASC')->get();
        return $services;
    }
    
    
}










