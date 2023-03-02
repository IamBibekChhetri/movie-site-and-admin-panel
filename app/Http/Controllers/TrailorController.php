<?php

namespace App\Http\Controllers;

use App\Models\Trailor;
use App\Models\Category;
use App\Models\ComingMovie;
use Illuminate\Http\Request;

class TrailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comingMovie = ComingMovie::whereStatus('on')->get();
        $category = Category::whereStatus('on')->get();
        $trailor = Trailor::all();
        return view('admin.pages.trailor.index', compact('trailor', 'category', 'comingMovie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::whereStatus('on')->get();
        $comingMovie = ComingMovie::whereStatus('on')->get();
        return view('admin.page.trailor.create', compact('category', 'comingMovie'));
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
            'category_id' => ['required'],
            'trailor' => ['required'],
        ]);
        $trailor = new Trailor();
        $trailor->category_id = $request->get('category_id');
        $trailor->trailor = $request->get('trailor');

        if ($request->hasFile('poster_image')) {
            $image = time() . '.' . $request->file('poster_image')->getClientOriginalExtension();
            move_uploaded_file($request->poster_image, 'public/image/trailor/' . $image);
            $trailor->poster_image = $image;
        }

        $trailor->save();
        return redirect()->route('trailor.index')
            ->with('success', 'Trailor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trailor  $trailor
     * @return \Illuminate\Http\Response
     */
    public function show(Trailor $trailor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trailor  $trailor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trailor = Trailor::find($id);
        $category = Category::whereStatus('on')->get();
        $comingMovie = ComingMovie::whereStatus('on')->get();
        return view('admin.page.trailor.edit',compact('trailor', 'category', 'comingMovie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trailor  $trailor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trailor $trailor)
    {
        if ($request->hasFile('poster_image')) {
            $imageName = time() . '.' . $request->file('poster_image')->getClientOriginalExtension();
            if ($trailor->poster_image != "") {
                if (file_exists('public/image/trailor/' . $trailor->poster_image)) {
                    unlink('public/image/trailor/' . $trailor->poster_image);
                }
            }
            move_uploaded_file($request->poster_image, 'public/image/trailor/' . $imageName);

            $trailor->poster_image = $imageName;
        }

        $trailor->category_id = $request->get('category_id');
        $trailor->trailor = $request->get('trailor');
        $trailor->save();
        return redirect()->route('trailor.index')
            ->with('success', 'Trailor Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trailor  $trailor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trailor $trailor)
    {
        $trailor->delete();
        return redirect()->route('trailor.index')
            ->with('success', 'trailor Deleted successfully.');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = Trailor::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('trailor.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = Trailor::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('trailor.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
