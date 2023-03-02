<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReleaseMovie;
use App\Models\Rating;
use App\Models\Favourite;

class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releaseMovie = ReleaseMovie::whereStatus('on')->get();
        $user = User::all();        
        return view('user.dashboard',compact('releaseMovie', 'user'));
    }

    public function movie()
    {
        $releaseMovie = ReleaseMovie::whereStatus('on')->get();
        return view('user.pages.movie',compact('releaseMovie'));
    }

    public function detail($id)
    {
        $releaseMovie = ReleaseMovie::find($id);
        return view('user.pages.detail', compact('releaseMovie'));
    }

    public function about()
    {
        return view('user.pages.about');
    }

    public function profile()
    {
        return view('user.pages.profile');
    }

         // ========================= Status Update Controller =======================

         public function favourite(Request $request, $id)
         {
             $status = Favourite::find($id);
             $status->status = 'on';
             $status->save();
             return redirect()->route('detail')
                 ->with('success', ' Active successfully.');
         }
     
         public function dislike(Request $request, $id)
         {
             $status = Favourite::find($id);
             $status->status = 'off';
             $status->save();
             return redirect()->route('detail')
                 ->with('success', ' DeActive successfully.');
         }
    
    
}
