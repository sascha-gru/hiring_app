<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'street' => 'required|string',
            'zip' => 'required|integer',
            'location' => 'required|string'
        ]);

        $company = Company::create($validatedData);

        return redirect()->route('companies.index', ['id' => $company->id]);
    }

    /**
     * Display the specified resource.
     */
    public function detail(Company $company, $id)
    {
        $company = Company::findOrFail($id); 
        return view('companies.detail', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company, $id)
    {
        $company = Company::findOrFail($id);
        return view('companies.detail', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'street' => 'required|string',
            'zip' => 'required|integer',
            'location' => 'required|string'
        ]);

        $company = Company::findOrFail($id);
        $company->update($validatedData);

        return redirect()->route('companies.detail', ['id' => $company->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
