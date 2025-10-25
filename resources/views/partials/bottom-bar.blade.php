

@if (   Route::is('order') || Route::is('price') || Route::is('blog') || Route::is('sample') || Route::is('sitemap') || Route::is('disclaimer') || Route::is('reviews')  )

<div class="bg-primary-one px-4 lg:px-20 ">
    <div class="container mx-auto py-8 grid grid-cols-12">

        <div class="col-span-12 xl:col-span-10 text-3xl font-bold lg:font-medium lg:text-5xl text-white">{{ ucfirst(Request::path())  }}
        </div>
        <div class="hidden xl:block text-white my-auto text-xl"><a href="{{ route('home') }} " class="hover:underline underline-offset-2">Home</a><i class="fa-solid fa-angle-right ml-4 text-sm"></i></div>
        <div class="hidden xl:block   text-xl text-white my-auto ">{{  ucfirst(Request::path())  }}</div>
    </div>
</div>    

@elseif (Route::is('contact') || Route::is('about')||   Route::is('privacy') || Route::is('terms') || Route::is('revision') )
<div class="bg-primary-one px-4 lg:px-20 ">
    <div class="container mx-auto py-8 grid grid-cols-12">

        <div class="col-span-12 xl:col-span-9 text-3xl font-bold lg:font-medium lg:text-5xl text-white">{{ ucwords(str_replace('-', ' ', request()->segment(1) ))  }}
        </div>
        <div class="hidden xl:block text-white my-auto text-xl"><a href="{{ route('home') }} " class="hover:underline underline-offset-2">Home</a><i class="fa-solid fa-angle-right ml-4 text-sm"></i></div>
        <div class="hidden xl:block  col-span-2  text-xl text-white my-auto ">{{ ucwords(str_replace('-', ' ', request()->segment(1) ))  }}</div>
    </div>
</div>    
 
@endif

