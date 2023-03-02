<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userRole = UserRole::all();
        return view('admin.pages.userRole.index', compact('userRole'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.userRole.create');
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

            'role' => ['required', 'unique:userRoles'],
        ]);

        $userRole = UserRole::create($request->all());
        return redirect()->route('userRole.index')
            ->with('success', 'User Role created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function show(UserRole $userRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userRole = UserRole::find($id);
        return view('admin.pages.userRole.edit', compact('userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRole $userRole)
    {
        $userRole->update($request->all());
        return redirect()->route('userRole.index')
            ->with('success', 'User Role Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRole $userRole)
    {
        $userRole->delete();

        return redirect()->route('userRole.index')
            ->with('success', 'User Role deleted successfully');
    }

    // ========================= Status Update Controller =======================

    public function onStatus(Request $request, $id)
    {
        $status = UserRole::find($id);
        $status->status = 'on';
        $status->save();
        return redirect()->route('userRole.index')
            ->with('success', 'Status Active successfully.');
    }

    public function offStatus(Request $request, $id)
    {
        $status = UserRole::find($id);
        $status->status = 'off';
        $status->save();
        return redirect()->route('userRole.index')
            ->with('success', 'Status DeActive successfully.');
    }
}
