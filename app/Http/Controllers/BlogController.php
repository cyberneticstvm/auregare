<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function comments(string $id)
    {
        $comments = Comment::where('blog_id', decrypt($id))->latest()->get();
        return view('admin.blog.comments', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'title' => 'required',
            'status' => 'required',
            'type' => 'required',
            'category' => 'required',
            'featured_image' => 'required|mimes:jpg,jpeg,png,webp|max:1024',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(str_replace(' ', '-', $request->slug));
        if ($request->file('featured_image')) :
            $path = 'blog/featured_images';
            $fname = time() . '_' . $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->storeAs($path, $fname, 'public');
            $input['featured_image'] = '/storage/' . $path . '/' . $fname;
        endif;
        $input['created_by'] = $request->user()->id;
        $input['updated_by'] = $request->user()->id;
        Blog::create($input);
        return redirect()->route('admin.blog')->with("success", "Blog created successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail(decrypt($id));
        $categories = Category::all();
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content' => 'required',
            'title' => 'required',
            'status' => 'required',
            'type' => 'required',
            'category' => 'required',
            'image' => 'sometimes|required|mimes:jpg,jpeg,png,webp|max:1024',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(str_replace(' ', '-', $request->slug));
        $input['updated_by'] = $request->user()->id;
        if ($request->file('featured_image')) :
            $path = 'blog/featured_images';
            $fname = time() . '_' . $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->storeAs($path, $fname, 'public');
            $input['featured_image'] = '/storage/' . $path . '/' . $fname;
        endif;
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        return redirect()->route('admin.blog')->with("success", "Blog updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::findOrFail(decrypt($id))->delete();
        return redirect()->route('blog')->with("success", "Blog deleted successfully!");
    }
}
