<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_projects = "";
        $active_courses = "active";

        $courses = Course::all();

        return view('course', compact('active_welcome', 'active_projects', 'active_courses', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courseCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'course_name' => 'required|min:5|max:50',
         ]);

        //
        Course::create([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'lecturer' => $request->lecturer,
            'number_sks' => $request->number_sks,
            'description' => $request->deskripsi
        ]);
        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::where('course_code', $id)->first();
        return view('courseView', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courseEdit', compact('course'));
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
        $course = Course::findOrFail($id);
        $course->update([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'lecturer' => $request->lecturer,
            'number_sks' => $request->number_sks,
            'description' => $request->deskripsi
        ]);
        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect(route('courses.index'));
    }
}
