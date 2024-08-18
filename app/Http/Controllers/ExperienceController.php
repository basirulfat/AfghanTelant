<?php

namespace App\Http\Controllers;

use App\Models\experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Experience =auth()->user()->experience;
        return view('experience.index',compact('Experience'));
       
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("CreateCv");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'job_title' => 'required|regex:/^[A-Za-z\s]{5,50}$/',
            'seniority' => 'required|regex:/^[A-Za-z\s]{5,50}$/',
            'start_year'=>'required',
            'end_year'=>'required',
            'location' => 'required',
            ]
               );
        $Experience = new experience();
        $Experience->user_id=auth()->id();
        $Experience->job_title=$request->input('job_title');
        $Experience->start_year=$request->input('start_year');
        $Experience->end_year=$request->input('end_year');
        $Experience->seniority=$request->input('seniority');
        $Experience->location=$request->input('location');
        $Experience->save();
        // return redirect()->route('experience.index');   
        
        return redirect()->back()->with('success', 'Data has been stored successfully!');   

    }

    /**
     * Display the specified resource.
     */
    public function show(experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(experience $experience)
    {
        return view('experience.edit',compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, experience $experience)
    {
        
        $experience->update($request->all());
        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(experience $experience)
    {
        $experience->delete();
        return back();
    }
}
