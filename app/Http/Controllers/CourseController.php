<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Discipline;
use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public $courseModel;
    public $instituteModel;
    public $disciplineModel;
    public function __construct(Course $course, Institution $institute,Discipline $discipline)
    {
        $this->courseModel= $course;
        $this->instituteModel= $institute;
        $this->disciplineModel= $discipline;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'courses' => $this->courseModel->with('disciplines')->get(),
        ];

//        dd($data);

        return view('institutions.course.index',$data);
    }
 public function stuIndex()
    {
        $data = [
            'courses' => $this->courseModel->with('disciplines')->get(),
        ];

//        dd($data);

        return view('students.courses.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
        'courses' => $this->courseModel->get(),
        'institutions' => $this->instituteModel->get(),
        'disciplines' => $this->disciplineModel->get(),
            ''
        ];
        return view('institutions.course.create',$data);
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        DB::beginTransaction();

        $value= $this->courseModel->create([
            'name'=> $request->name,
            'description' =>$request->description,
            'price' =>$request->description,
            'credit' =>$request->credit,
            'institution_id' =>$request->institution_id,

        ]);

        $value->disciplines()->attach($request->disciplines);
        DB::commit();

        if ($value)
        {
            return redirect()->route('course.index');
        }
        else {
            return redirect()->route('course.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
