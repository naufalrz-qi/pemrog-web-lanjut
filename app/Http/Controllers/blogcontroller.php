<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\blogs;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blogs::latest()->get();
        $no = 0;
        return view('blogs.index', compact('blogs','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'author' => 'required|string|max:10',
            'title' => 'required|string|max:50',
            'body' => 'required',
            'keyword' => 'required|string|max:255',
        ]);

        $blog = blogs::create([
            'author' => $request->author,
            'title' => $request->title,
            'body' => $request->body,
            'keyword' => $request->keyword
        ]);

        if ($blog) {
            return redirect()
                ->route('blog.index')
                ->with([
                    'success' => 'New blog has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
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
        $blog = blogs::findOrFail($id);
        return view('blogs.edit', compact('blog'));//
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
        $this->validate($request, [
            'author' => 'required|string|max:10',
            'title' => 'required|string|max:50',
            'body' => 'required',
            'keyword' => 'required|string|max:255',
        ]);

        $blog = blogs::findOrFail($id);

        $blog->update([
            'author' => $request->author,
            'title' => $request->title,
            'body' => $request->body,
            'keyword' => $request->keyword
        ]);

        if ($blog) {
            return redirect()
                ->route('blog.index')
                ->with([
                    'success' => 'Blog has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blogs::findOrFail($id);
        $blog->delete();

        if ($blog) {
            return redirect()
                ->route('blog.index')
                ->with([
                    'success' => 'Blog has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('blog.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
