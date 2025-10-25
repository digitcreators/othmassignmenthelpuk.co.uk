@extends('layouts.web')

@section('title', '')
@section('description', '')
@section('canonical', '')

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
    
</style>
<div class="blogs-section py-14">
    <section class="contentSection">
        <h1 class="lg:px-20 mx-4 text-4xl mb-5">
                {{ $category->name }}
            </h1>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:px-20 mx-4">
            <div class="lg:col-span-8 recent bg-white">
                <div class="container mx-auto grid md:grid-cols-2 xl:grid-cols-2 gap-y-10">
                    @if (count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <div class="blogs-div">
                                <div>
                                    <a href="{{ route('blogs.show', $blog->slug) }}">
                                        <img src="{{ url('storage/app/public/'.$blog->image_path) }}"  alt="{{ env('APP_NAME',config('app.name')) }}" class="w-full hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 cursor-pointer"></a>
                                </div>
                                <hr>
                                <div class="mt-3" >
                                    <a href="{{ route('blogs.show', $blog->slug) }}"><p class="bg-white text-2xl  w-full text-center md:text-left h-20">{{ $blog->title }}</p></a>
                                </div>
                                <p class="bg-white leading-normal py-4 text-center md:text-left">
                                   {{Str::limit(strip_tags($blog->description), 120 , '[...]')  }}
                                </p>    
                                <hr>
                                <div class="w-full px-2 pt-4 pb-10">
                                    <div class="block float-left "> 
                                         <p class="bg-white mx-auto md:mx-0"> <i class="fa fa-user px-1"></i> Admin<i class="fa fa-clock-o px-1"></i>{{ $blog->created_at->format('j F Y') }}</p>
                                    </div>                                        
                                    <a href="{{ $blog->slug }}" class="text-primary-one font-semibold float-right border-l border-gray-400 pl-2 hover:underline">
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
            </div>
            <div class="lg:col-span-4">
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
