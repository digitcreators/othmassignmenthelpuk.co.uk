@extends('layouts.web')
@section('title', ' 
The Top-Notch Assignment Help UK for Ideal Grades')
@section('description',"Hire our professional writers and let your academic career flourish by choosing Assignment Help UK. Get well-researched and quality assignments today.")
@section('canonical', config('app.url') . Request::path())
@section('noindex')
@endsection

@section('content')
<style>
section.main-banner {
    margin: 0 auto;
    position: relative;
}
    section.main-banner .banner-image {
    height: 730px;
    left: 0;
    margin: 0 auto;
    -o-object-fit: fill;
    object-fit: fill;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    z-index: -1;
}
</style>

    
    <section class="main-banner bg-gray-800 text-white py-12">
        <img src="{{ asset('imgs/home-background.webp') }}" class="img-fluid banner-image" alt="Design Agency" title="Design Agency" width="1350" height="680" loading="eager">
    <div class="lg-px-5 px-5 py-lg-0 py-5 container mx-auto flex flex-col lg:flex-row items-center">
      <!-- Left Column -->
      <div class="">
        <h1 class="text-4xl font-bold pb-4">Assignment Help UK 
            <span class="span-header">- Make Career Success Your Ideal Destiny </span></h1>
        <p class="pt-6">
            Assignment Help UK is a professional platform that has been working for more than 15 years and served 10000+ students across the UK. We have a team of expert assignment writers who deliver well-researched and outstanding assignments to all students, helping them reach the heights of success. 
        </p>

        <div class=" flex flex-col sm:flex-row items-center sm:space-x-4 mt-10">
            <a href="{{ route('order') }}" class="btn-pri">
                Order Assignment Help!
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="my-5 btn-sec">
                Chat Now
            </a>
        </div>
      </div>
      
      <!-- Right Column -->
      <div class=" col-span-12 lg:col-span-5 mt-4 lg:mt-0">
        <div class="calculator mx-auto lg:mx-0 sm:max-w-sm md:max-w-md lg:max-w-lg px-4 relative ">
            <div class="pricing text-center ">
                <span
                    class="relative top-3 md:text-2xl text-primary-one text-sm font-semibold bg-black p-2 md:p-2 px-4 xl:px-10">
                    Pricing Calculator
                </span>
            </div>
            <div class="calculator-bg px-5 px-lg-0 border-black p-6 space-y-4">
    
                <div class="flex flex-col mt-2 md:mt-5">
                    <select name="paper_type" class="form-select">
                        <option  hidden="" value="0" disabled="" selected="">Paper Type</option>
                       
                    </select>
                </div>
    
                <div class="flex flex-col">
                    <select name="academic_level" id="academic_level" class="form-select get-fare" >
                        <option hidden="" value="0" disabled="" selected="">Academic Level</option>
                       
                        
                    </select>
                </div>
    
                <div class="flex flex-col">
                    <select id="deadline" name="deadlines" class="form-select get-fare">
                        <option hidden="" value="0" disabled="" selected="">Deadline</option>
                       
                        
                    </select>
                </div>
                <div class="get-fare flex flex-col">
                    <select name="Pages" id="no_of_pages" class="form-select get-fare">
                        <option hidden="" value="0" disabled="" selected="">No of words / Pages</option>
                       
                        
                    </select>
                </div>
                <div class="flex flex-row justify-center items-center font-semibold leading-[45px] space-x-2">
                    <div class="text-dark">Total Price :</div>
                    <div class="text-dark">£ </div>
                    <div class="text-dark" id="cost">0</div>
                </div>
                <div class="flex justify-center items-center">
                    <a href="{{ route('order') }}" class="w-full btn-pri">Order Now</a>
                </div>
            </div>
        </div>
    </div> 

    </div>

<div class="lg-px-12">
        <div class="p-4 rounded shadow-sm flex flex-col md:flex-row items-center  px-5 text-center md:text-left bg-[#f8fbff]">
            
            <!-- Image Column -->
            <div class="mb-3 md:mb-0">
          <img src="{{ asset('img/Untitled-2.webp') }}" alt="No AI"  width="69" height="69">
            </div>

            <!-- Text Column -->
            <div class="mb-3 md:mb-0 px-3">
                <h5 class="font-bold text-white">No ChatGPT or AI Text Generators</h5>
                <p class="mb-0 text-sm text-white padding py-4">
                    At Assignment Help UK, we don’t rely on AI tools. Every piece is crafted by our expert writers 
                    to meet your exact needs and unique writing style. 100% plagiarism-free, guaranteed!
                </p>
            </div>

            <!-- Button Column -->
          
        </div>
    </div>
</section>
</div>
        
@endsection