<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Blog;
use App\Categories;
use App\Tag;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        // with('tags')->
        // exclude('description')->
        //  return $blogs;
 
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $tags =Tag::all();

        return view('admin.blogs.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('image')) {
            $fileName = time().'.'.$request->image->extension();
            $path = $request->image->storeAs('blogs', $fileName, 'public');
            $request->merge(['image_path' => $path]);
        }

        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);
        $request->merge(['user_id' => Auth::user()->id]);

        DB::beginTransaction();
            
        $blog = Blog::create($request->all());
        // $blog->tags()->sync( $request->tags );

        DB::commit();

        return redirect()->route('admin.blogs.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        // $categories =Category::all();
        // $tags =Tag::all();
        // , 'categories', 'tags'
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasfile('image')) {
            $fileName = time().'.'.$request->image->extension();
            $path = $request->image->storeAs('blogs', $fileName, 'public');
            $request->merge(['image_path' => $path]);
        }
        $blog = Blog::findOrFail($id);
        
        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);
        
        $blog->update($request->all());

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()->route('admin.blogs.index');
    }

    public function getSlug(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        return Str::slug($request->title);
    }

}
