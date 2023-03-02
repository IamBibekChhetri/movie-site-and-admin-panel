<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRole;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $user_role = UserRole::whereStatus('on')->get();
        return view('admin.pages.user.index', compact('user', 'user_role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userRole = UserRole::whereStatus('on')->get();
        return view('admin.pages.user.create', compact('userRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'user_role_id' => ['required'],
            'name' => ['required'],
            'address' => ['required'],
            'phone' => ['required', 'unique:users', 'min:10'],
            'email' => ['required', 'unique:users'],
        ]);
        $user = new User();
        if ($request->hasFile('profile')) {
            $image = time() . '.' . $request->file('profile')->getClientOriginalExtension();
            move_uploaded_file($request->profile, 'public/image/user/' . $image);
            $user->profile = $image;

            $user->user_role_id = $request->get('user_role_id');
            $user->name = $request->get('name');
            $user->address = $request->get('address');
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->phone = $request->get('phone');
        } else {
            $user->user_role_id = $request->get('user_role_id');
            $user->name = $request->get('name');
            $user->address = $request->get('address');
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->phone = $request->get('phone');
        }
        $user->save();
        return redirect()->route('user.index')
            ->with('success', 'User created successfully.');
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
        $userRole = UserRole::whereStatus('on')->get();
        $user = User::find($id);
        return view('admin.pages.user.edit', compact('user', 'userRole'));
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
        $user = User::find($id);
        if ($request->hasFile('profile')) {
            $imageName = time() . '.' . $request->file('profile')->getClientOriginalExtension();
            if ($user->attachment != "") {
                if (file_exists('public/image/user/' . $user->profile)) {
                    unlink('public/image/user/' . $user->profile);
                }
            }

            move_uploaded_file($request->profile, 'public/image/user/' . $imageName);

            $user->profile = $imageName;

            $user->user_role_id = $request->get('user_role_id');
            $user->name = $request->get('name');
            $user->address = $request->get('address');
            $user->email = $request->get('email');
            $user->phone = $request->get('phone');
        } else {
            $user->user_role_id = $request->get('user_role_id');
            $user->name = $request->get('name');
            $user->address = $request->get('address');
            $user->email = $request->get('email');
            $user->phone = $request->get('phone');
        }
        $user->save();

        return redirect()->route('user.index')
            ->with('success', 'User Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', 'user deleted successfully');
    }

    // ========================= Status Update Controller =================

    public function onStatus(Request $request, $id)
    {
        $status = User::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('user.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = User::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('user.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
