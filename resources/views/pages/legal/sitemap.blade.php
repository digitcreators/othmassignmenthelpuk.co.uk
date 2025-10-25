@extends('layouts.web')
@section('title', "OTHM Assignment Help UK Sitemap - Navigate Our Services")
@section('description', "Navigate OTHM Assignment Help UK with ease. Our sitemap helps you quickly find the services and pages you need for a smooth and efficient user experience.")
@section('canonical', config('app.app_url') . Request::path())


@section('styles')
 <style>   
.heart{
    animation: beat .7s infinite alternate;
    transform-origin: center;
  }

  @keyframes beat {
    to {
      transform: scale(1.2);
    }
  }
  .sitemap-ul li{
      padding: 8px 0;
  }
  .sitemap-ul li a:hover{
      color: var(--color-secondary);
  }

</style>
@endsection

@section('content')

    <section class="aa my-10 px-10 py-5 text-white lg:px-32 px-5" style="background: rgb(246, 246, 246);">
        <h1 class="text-black text-4xl py-5">Sitemap</h1>

        <div class="bg-primary dark:bg-primary-one rounded">
            <h2 class="text-white text-2xl font-semibold p-4 text-center sm:text-left">
                Our Company
            </h2>
        </div>

        <div class="mx-2 my-4">
            <ul class="my-6 grid grid-cols-1 lg:grid-cols-4 text-center sm:text-left gap-3 sitemap-ul text-black">
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        About
                    </a>
                </li>
                <!--<li>-->
                <!--    <a href="{{ route('blog') }}">-->
                <!--        Blogs-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('reviews') }}">
                        Reviews
                    </a>
                </li>
               <li>
                    <a href="{{ route('price') }}">
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="{{ route('order') }}">
                        Order Now
                    </a>
                </li>
                <li>
                    <a href="{{ route('sitemap') }}">
                        Sitemap
                    </a>
                </li>
            </ul>
        </div>

        <div class="bg-primary dark:bg-primary-one rounded">
            <h2 class="text-white text-2xl font-semibold p-4 text-center sm:text-left">
                Our Legal Policies
            </h2>
        </div>

        <div class="mx-2 my-4">
            <ul class="my-6 grid grid-cols-1 lg:grid-cols-4 text-center sm:text-left gap-3 sitemap-ul text-black">
                <li>
                    <a href="{{ route('privacy') }}">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="{{ route('terms') }}">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
        </div>

        
       
  </section>


@endsection