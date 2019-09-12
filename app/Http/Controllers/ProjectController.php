<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $projectsData = Projects::all();
        $projectsData= Projects::orderBy('id' ,'desc')->get(); 

        return view('home' ,[
            'projectsData' => $projectsData
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $storeProject = new Projects;
        $storeProject->name = $request->name;
        $storeProject->detail = $request->detail;
        $storeProject->save();

        return redirect('/home');
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
        $project = Projects::find($id);
        // echo $project;

        return view('show', [
            'showProject' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $editProject = Projects::find($id);
           return view('edit', [
               'editProject' => $editProject
           ]);
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
        //
        $updateProject = Projects::find($id);
        if($updateProject){

            $updateProject->name = $request->name;
            $updateProject->detail = $request->detail;
            $updateProject->save();
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteProject = Projects::find($id);
        $deleteProject->delete();
        return redirect('/home');
    }
}
