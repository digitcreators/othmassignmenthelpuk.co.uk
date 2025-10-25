@extends('layouts.web')

@section('title', $blog->title ?? '-')
@section('description', $blog->meta_description ?? '-')
@section('canonical', $blog->slug ?? '-')

@section('content')
<style>
    .sticky-wrapper {
        /*height: 1200px;*/
    }
    .free-features {
        position: -webkit-sticky;
        position: sticky;
        top: 10px;
    }
    .features-point {
        padding-top: 8px;
        padding-bottom: 8px;
        line-height: 1.8;
        border-bottom: 2px solid #ecedee;
    }
    .free{
        color: #AE0000;
    }

    .blogs-div{
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 10px;
        background: white;
        padding: 10px;
        border: 2px solid #AE0000;
        border-radius: 20px;
    }
    .side-panel{
        padding: 20px;
        border: 1px solid #e6e6e6;
    }
    
    .paras p{
        margin-bottom:1.1em;
    }
    
    .breadcrumb {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: .75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        margin-top: 20px;
        border-radius: .25rem;
    }
    
    .breadcrumb-item+.breadcrumb-item::before {
        display: inline-block;
        padding: 0rem .5rem;
        color: #ae0000;
        content: "/";
    }
    .breadcrumb-item a:hover {
        color: #ae0000;
    }
     table {
      width: 100%;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
    }
    table tbody tr:first-child {
      background-color: #AE0000;
      color: #fff;
    }
    th, td {
      padding: 12px 16px;
      border: 1px solid #ddd;
      text-align: left;
    }
    tbody tr:nth-child(even) {
      background-color: #F9F9F9;
    }
    tbody tr:nth-child(odd) {
      background-color: #FFFFFF;
    }
    th {
      font-weight: bold;
    }
    .blogs-page h1 {
      font-size: 2rem !important; /* Example size */
      font-weight: 600;
      color: #ae0000;
    }
    .blogs-page h2 {
      font-size: 1.75rem !important;
      font-weight: 600;
    }
    .blogs-page h3 {
      font-size: 1.5rem;
      font-weight: 600;
    }
    .blogs-page h4 {
      font-size: 1.25rem;
      font-weight: 600;
    }
    .blogs-page h5 {
      font-size: 1rem;
      font-weight: 600;
    }
    .blogs-page h6 {
      font-size: 0.75rem;
      font-weight: 600;
    }
    
    .blog-description a{
        color: #ae0000;
        font-weight: 700;
    }

    .blog-description ol{
        list-style: decimal;
        margin-left: 25px;
    }
    .blog-description ul{
        list-style: disc;
        margin-left: 25px;
    }
</style>
<div class="mt-44 lg:mt-28">
    <section class="bg-light contentSection">
        <div class="grid grid-cols-1 gap-6 lg:px-20 mx-4" aria-label="breadcrumb" class="pl-md-3" bis_skin_checked="1">
            <ol class="bg-transparent breadcrumb ml-1 flex">
                <li class="breadcrumb-item">
                    <a class="text-black" href="{{ route('blog') }}">Blogs</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-black" href="{{ route('blogs.category', [$category->slug])}}">{{ $category->name}} </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
        </div>
        <div class="blogs-page grid grid-cols-1 lg:grid-cols-12 gap-6 lg:px-20 mx-4 mt-4 pb-8" >
            <div class="lg:col-span-8 ">
                <div class="side-panel rounded overflow-hidden w-full bg-white">
                    <a href="{{ url('storage/app/public/'.$blog->image_path) }}" target="_blank">
                        <img src="{{ url('storage/app/public/'.$blog->image_path) }}" alt="{{ $blog->title }}" class="blog-image w-full object-cover object-center">
                    </a>
                </div>
                <div class="container mx-3 bg-white side-panel  mt-4">
                    <h1 class="text-4xl py-3">
                        {{ $blog->title }}
                    </h1>
                    <section class="paras blog-description">
                            {!! $blog->description !!}
                    </section>
                </div>          
            </div>
            <div class="lg:col-span-4 ">
                <div class="Block ">
                    <!--<div class="side-panel relative mb-8">-->
                    <!--    <h3 class="text-lg font-semibold mb-3 bg-primary-one-dark text-white py-2 px-5"><i class="fa fa-search mr-2"></i>Search</h3>-->
                    <!--    <form class="form-inline px-1" method="GET" action="">-->
                    <!--        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">-->
                    <!--        <button class=" btn-primary fa fa-search mt-3" type="submit" ></button>-->
                    <!--        </form>-->
                    <!--</div>-->
                    
                    <div class="side-panel relative mb-5 bg-white">
                        <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5"><i class="fa fa-file-text mr-2"></i>Recent Posts</h3>
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                            <div class="recent-blogs">
                                <ul class="list-unstyled m-0 blog-listing">
                                    <li class="py-2"><a href="{{ route('blogs.show', $blog->slug) }}"> {{ $blog->title }}</a></li>
                                </ul>
                            </div>
                            @endforeach
                        @else
                        <div class="recent-blogs">
                            <p>No blogs found</p>
                        </div>
                        @endif
                    </div>
                    <div class="side-panel relative mb-5 bg-white">
                        <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5"><i class="fa fa-file-text mr-2"></i>Categories</h3>
                        @foreach ($categories as $category)
                            <div class="recent-blogs">
                                <ul class="list-unstyled m-0 blog-listing">
                                    <li class="py-2"><a href="{{ route('blogs.category', $category->slug) }}"> {{ $category->name }}</a></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="sticky-wrapper relative">
                        <div class="side-panel free-features mb-8 bg-white">
                            <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5">Free Features</h3>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-4">
                				    <span class="font-bold text-black">Professional Assistance</span><span class="free font-bold">free</span></div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Plagiarism Report</span><span class="free font-bold">free</span>
                				</div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Prompt Response</span><span class="free font-bold">free</span>
                				</div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Formatting</span><span class="free font-bold">free</span>
                				</div>
                            </div>
                            <div class="features-point">
                                <div class="flex justify-between items-center mt-1">
                				    <span class="font-bold text-black">Revisions</span><span class="free font-bold">free</span>
                                </div>
                            </div>
            				<div class="text-center my-3 pt-4" bis_skin_checked="1">
                                <a href="{{ route('order')}} " class="btn btn-primary my-2 mb-lg-0 w-full rounded font-bold text-white">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
