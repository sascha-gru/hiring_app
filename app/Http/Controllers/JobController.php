<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create'); 
    }


    /**
     * Save a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jobtitle' => 'required|string|max:255',
            'description' => 'nullable|string',
            'salary' => 'nullable|numeric',
        ]);

        $job = Job::create($validatedData);

        return redirect()->route('jobs.index', ['id' => $job->id]);
    }

    

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $job = Job::findOrFail($id); // Job aus der Datenbank abrufen
        return view('jobs.detail', compact('job')); // Detailansicht anzeigen
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.detail', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jobtitle' => 'required|string|max:255',
            'description' => 'nullable|string',
            'salary' => 'nullable|integer',
        ]);

        $job = Job::findOrFail($id);
        $job->update($validatedData);

        return redirect()->route('jobs.detail', ['id' => $job->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
