@extends('layouts.web')
@section('title', 'OTHM Assignment Help UK Blog | Tips & Insights for Students')
@section('description', 'Read informative blogs from OTHM Assignment Help UK with study tips, assignment guidance, and practical advice to boost your academic success.')
@section('canonical', config('app.app_url') . Request::path())

@section('noindex')
@endsection
@section('content')

<style>
    .blogs-section{
        background-color: #f8f9fa !important;
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
    .recent{
        padding: 20px;
        border: 1px solid #e6e6e6;
    }
    input{
        padding: 0.3em 0.6em;
        width: 100%;
        border: 1px solid;
        border-color: rgba(0, 0, 0, 0.1);
        background: none;
        color: rgba(0, 0, 0, 0.6);
    }
    
</style>
<div class="blogs-section py-14">
    <section class="contentSection">
        @if(isset($query))
                <div class="shadow-lg border p-3 mb-5">
                    <h2 class="text-xl font-bold">Search Results for: "{{ $query }}"</h2>
                </div>
            @endif
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:px-20 mx-4">
            <div class="lg:col-span-8 recent bg-white">
                <div class="container mx-auto grid md:grid-cols-2 xl:grid-cols-2 gap-y-10">
                    @if (count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <div class="blogs-div">
                                <div>
                                    <a href="{{ route('blogs.show',$blog->slug) }}">
                                        <img src="{{ url('storage/app/public/'.$blog->image_path) }}"  alt="{{ env('APP_NAME',config('app.name')) }}" class=" w-full hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer"></a>
                                </div>
                                <hr>
                                <div class="mt-3" >
                                    <a href="{{ route('blogs.show',$blog->slug) }}"><p class="bg-white text-2xl  w-full text-center md:text-left h-20">{{ $blog->title }}</p></a>
                                </div>
                                <p class="bg-white leading-normal py-4 text-center md:text-left">
                                   {{Str::limit(strip_tags($blog->description), 120 , '[...]')  }}
                                </p>    
                                <hr>
                                <div class="w-full px-2 pt-4 pb-10">
                                    <div class="block float-left "> 
                                         <p class="bg-white mx-auto md:mx-0"> <i class="fa fa-user px-1"></i> Admin<i class="fa fa-clock-o px-1"></i>{{ $blog->created_at->format('j F Y') }}</p>
                                    </div>                                        
                                    <a href="{{ route('blogs.show',$blog->slug) }}" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2 hover:underline">
                                        <i class="fa fa-file-text-o pl-2 text-black"></i> Read more</a>
                                </div>                    
                            </div>     
                        @endforeach                
                    @else
                        <div class="bg-white">
                            <p class="text-center py-4 mx-auto md:mx-0 heading-secondary text-dark-lite dark:text-white">
                                No Blogs found
                            </p>
                        </div>
                    @endif
                </div>  
                <div class="flex space-x-2 justify-center mt-8">
                    <a href="{{ route('blog') }}"><button type="button" class="bg-primary-one px-4 py-2 text-white  rounded-lg font-bold">1</button></a>
                    <a href="/blogs?page=2"><button type="button" class="bg-primary-one px-4 py-2 text-white rounded-lg font-bold">2</button></a>
                </div>          
            </div>
            <div class="lg:col-span-4 ">
                <div class="mb-4 recent bg-white">
                    <form role="search" method="get" action="{{ route('blogs.search') }}" class="">
                        <div class="flex gap-4">
                            <input class="" type="search" name="search" value="" placeholder="Search blog title..." required>
                            <button aria-label="Search" class="text-white p-2 text-base" type="submit" style="background: var(--color-secondary);">Search</button>
                        </div>
                    </form>
                </div>
                <div class="recent bg-white mb-5">
                    <div class="Block">
                        <div class="side-panel relative mb-8">
                            <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5"><i class="fa fa-file-text mr-2"></i>Recent Posts</h3>
                            @if (count($blogs) > 0)
                                @foreach ($blogs as $blog)
                                <div class="recent-blogs">
                                    <ul class="list-unstyled m-0 blog-listing">
                                        <li class="py-2"><a href="{{ $blog->slug }}"> {{ $blog->title }}</a></li>
                                    </ul>
                                </div>
                                @endforeach
                            @else
                            <div class="recent-blogs">
                                <p>No blogs found</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="recent bg-white">
                    <div class="Block">
                        <div class="side-panel relative mb-8">
                            <h3 class="text-lg font-semibold mb-3  bg-primary text-white py-2 px-5"><i class="fa fa-file-text mr-2"></i>Categories</h3>
                            @if(count($categories) > 0)
                                @foreach ($categories as $category)
                                <div class="recent-blogs">
                                    <ul class="list-unstyled m-0 blog-listing">
                                        <li class="py-2"><a href="{{ route('blogs.category', $category->slug) }}"> {{ $category->name }}</a></li>
                                    </ul>
                                </div>
                                @endforeach
                            @else
                            <div class="recent-blogs">
                                <p>No Categories found</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
