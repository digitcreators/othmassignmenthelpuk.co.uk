@extends('layouts.web')

@section('title', 'Woops! 404 Not Found')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')


    <section class="container mx-auto my-4 px-4 py-5">

        {{-- <h1 class="text-primary text-4xl my-4"><strong>About</strong></h1> --}}

        <div class="my-10">
            <h1 class="text-5xl md:text-9xl text-center font-black"> 4 <span class="span-header">0</span> 4 </h1>
            <p class="mt-2 text-3xl text-center font-black"> Page <span class="span-header">Not</span> Found </p>
            </div>

        <div class="text-center space-y-2 text-xl md:text-2xl mt-5">
            <div class="text-black">Oops! The page you are looking for does not exist.</div>
        </div>
        <div class="text-center py-5 mt-10">
           <a href="{{ route('home') }}" class="btn-pri mb-4">Back To Home</a>
        </div>
    </section>

@endsection



