<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = CompanyInfo::all();
        return view('admin.pages.companyInfo.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyInfo $companyInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = CompanyInfo::find($id);
        return view('admin.pages.companyInfo.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyInfo $company)
    {
        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->address = $request->get('address');
        $company->phone_no = $request->get('phone_no');
        $company->pan_vat_no = $request->get('pan_vat_no');


        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            if ($company->photo != "") {
                if (file_exists('public/image/company/' . $company->photo)) {
                    unlink('public/image/company/' . $company->photo);
                }
            }
            move_uploaded_file($request->photo, 'public/image/company/' . $imageName);

            $company->photo = $imageName;
        }

        $company->save();
        return redirect()->route('companyInfo.index')
            ->with('success', 'Company Info Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyInfo  $companyInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyInfo $companyInfo)
    {
        //
    }
}
