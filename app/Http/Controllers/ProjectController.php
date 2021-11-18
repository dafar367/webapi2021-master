<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_projects = "active";
        $active_courses = "";

        $projects = Project::all();
        $courses = Course::all();

        return view('project', compact('active_welcome', 'active_projects', 'active_courses', 'projects', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('projectCreate', compact('courses'));
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
        $code = Str::upper(Str::substr($request->project, 0, 3));

        Project::create([
            'code' => $code,
            'project' => $request->project,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'description' => $request->deskripsi
        ]);
        return redirect(route('projects.index'));
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
        $project = Project::where('code', $id)->first();
        return view('projectView', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $courses = Course::all();
        return view('projectEdit', compact('project', 'courses'));
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
        $code = Str::upper(Str::substr($request->project, 0, 3));
        $project = Project::findOrFail($id);
        $project->update([
            'code' => $code,
            'project' => $request->project,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'description' => $request->deskripsi
        ]);
        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Project = Project::findOrFail($id);
        $Project->delete();
        return redirect(route('projects.index'));
    }
}
