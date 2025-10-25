<?php


namespace App\Http\Controllers\Web;

use App\Blog;
use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
          $blogs = Blog::orderBy('id', 'ASC')->paginate(8);
          $categories = Categories::orderBy('id', 'ASC')->get();
        //    return $blogs;
        return view('pages.blogs.index',compact('blogs','categories'));
    }
 
    public function show(Blog $blog, $slug)
    {   
        $blog = Blog::where(['slug' => $slug, 'is_published' => 1])->firstOrFail();
        $category = Categories::where('id', $blog->category_id)->first();
        $categories = Categories::all();
        $blogs = Blog::with('user')->where(['is_published'=>1])->orderBy('created_at', 'DESC')->paginate(8);
     

        return view('pages.blogs.show', compact('blog', 'blogs', 'category', 'categories'));
    }
    
    public function category($slug)
    {
        // dd($slug);
        
        $category = Categories::where('slug', $slug)->first();
        $categories = Categories::all();
        $blogs = Blog::where('category_id', $category->id)->get();

        return view('pages.blogs.category',compact('blogs', 'categories', 'category'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('search');
        
        $categories = Categories::all();
    
        $blogs = Blog::where('title', 'LIKE', "%{$query}%")->paginate(9);
    
        return view('pages.blogs.index', compact('blogs', 'query', 'categories'));
    }
    
   
}
