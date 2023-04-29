<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('user_id', Auth::user()->id)->get();

        return view('userblogs.index')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();

        return view('userblogs.create')->with(compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'min' => ['required', 'int', 'digits_between:2,15'],
            'blog' => ['required', 'string', 'max:255'],
            'tag' => ['required', 'not_in:0']
        ]);

        try {
            $new = Blog::create([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'min_to_read' => $request->min,
                'content' => $request->blog,
            ]);

            $connect = BlogTag::create([
                'blog_id' => $new->id,
                'tag_id' => $request->tag,
            ]);
        }
        catch (\Exception $exception) {
            echo $exception;
        }

        if ($new)
        {
            return redirect()->route('myblog.index');
        }
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
        $blog = Blog::with('tags')->where('id', $id)->first();

        $tags = Tag::all();

        return view('userblogs.edit')->with(compact('blog', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $old_tag = BlogTag::where('blog_id', $id)->pluck('tag_id');

        $blog = Blog::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'min_to_read' => $request->min,
            'content' => $request->blog,
        ]);

        if ($old_tag != $request->tag)
        {
            BlogTag::where('blog_id', $id)->delete();

            BlogTag::create([
                'blog_id' => $id,
                'tag_id' => $request->tag,
            ]);
        }

        return redirect()->route('myblog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $remove = Blog::where(
            'id', $id
        )->delete();

        if ($remove)
        {
            return redirect()->route('myblog.index');
        }
    }
}
