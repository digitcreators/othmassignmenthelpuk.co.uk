@extends('layouts.web')
@section('title', 'Revision Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container mx-auto" style="min-height:250px">
   <div class="mx-4"> 
    <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl">
        
        <p class="my-4">Our revision policy includes</p>
        <ul style="list-style-type: disc;" class="mx-4" >
            <li class="my-2"><p>2 revisions for the first time are free; secondly, we help students in covering the formatting and other such requirements at zero percent requirement</p></li>
            <li class="my-2"><p>Revisions in which there are total questions are missing or number of words may exceed above 300, will not be done until requirements of clients are clearly checked.</p></li>
            <li class="my-2"><p>If any customer failed to convey proper requirements then complete revision will be done with some applicable charges.</p></li>
        </ul>
    </div>
   </div> 
</section>

@endsection