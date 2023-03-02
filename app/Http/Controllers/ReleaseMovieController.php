<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ReleaseMovie;
use Illuminate\Http\Request;

class ReleaseMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releaseMovie = ReleaseMovie::all();
        $category = Category::whereStatus('on')->get();
        return view('admin.pages.releaseMovie.index', compact('releaseMovie', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::whereStatus('on')->get();
        return view('admin.pages.releaseMovie.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required'],
            'actor' => ['required'],
            'category_id' => ['required'],
        ]);

        $releaseMovie = new ReleaseMovie();
        $releaseMovie->category_id = $request->get('category_id');
        $releaseMovie->title = $request->get('title');
        $releaseMovie->actor = $request->get('actor');
        $releaseMovie->description = $request->get('description');
        $releaseMovie->time = $request->get('time');
        $releaseMovie->status = $request->get('status');

        if ($request->hasFile('poster')) {
            $image = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            move_uploaded_file($request->poster, 'public/image/releaseMovie/' . $image);
            $releaseMovie->poster = $image;
        }

        $releaseMovie->save();

        return redirect()->route('releaseMovie.index')
            ->with('success', 'Movie Release Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReleaseMovie  $releaseMovie
     * @return \Illuminate\Http\Response
     */
    public function show(ReleaseMovie $releaseMovie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReleaseMovie  $releaseMovie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $releaseMovie = ReleaseMovie::find($id);
        $category = Category::whereStatus('on')->get();
        return view('admin.pages.releaseMovie.edit', compact('releaseMovie', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReleaseMovie  $releaseMovie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReleaseMovie $releaseMovie)
    {
        $releaseMovie->category_id = $request->get('category_id');
        $releaseMovie->title = $request->get('title');
        $releaseMovie->actor = $request->get('actor');
        $releaseMovie->description = $request->get('description');
        $releaseMovie->time = $request->get('time');
        $releaseMovie->status = $request->get('status');

        if ($request->hasFile('poster')) {
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            if ($releaseMovie->poster != "") {
                if (file_exists('public/image/releaseMovie/' . $releaseMovie->poster)) {
                    unlink('public/image/releaseMovie/' . $releaseMovie->poster);
                }
            }
            move_uploaded_file($request->poster, 'public/image/releaseMovie/' . $imageName);

            $releaseMovie->poster = $imageName;
        }

        $releaseMovie->save();
        return redirect()->route('releaseMovie.index')
            ->with('success', 'Release Movie Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReleaseMovie  $releaseMovie
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReleaseMovie $releaseMovie)
    {
        $releaseMovie->delete();
        return redirect()->route('releaseMovie.index')
            ->with('success', 'release Movie deleted successfully');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = ReleaseMovie::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('releaseMovie.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = ReleaseMovie::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('releaseMovie.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
