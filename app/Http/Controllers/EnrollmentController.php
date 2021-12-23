<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Discipline;
use App\Models\Enrollment;
use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EnrollmentController extends Controller
{
    public $courseModel;
    public $instituteModel;
    public $disciplineModel;
    public $enrollmentModel;
    public function __construct(Course $course, Institution $institute,Discipline $discipline, Enrollment  $enrollment)
    {
        $this->courseModel= $course;
        $this->instituteModel= $institute;
        $this->disciplineModel= $discipline;
        $this->enrollmentModel= $enrollment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'enrollments' => $this->enrollmentModel->get(),
        ];
        return view('students.enrollments.index', $data);
    }
 public function insIndex()

    {
        $data = [
        'enrollments' => $this->enrollmentModel->get(),
        ];
        return view('institutions.enrollments.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'institutions' => $this->instituteModel->get(),
        'disciplines' => $this->disciplineModel->get(),
        'courses' => $this->courseModel->get(),
            'enrollments' => $this->enrollmentModel->get(),

        ];

        return view('students.enrollments.create', $data);
    }
    public function stuEnroll()
    {
        $data =[
            'institutions' => $this->instituteModel->get(),
        'disciplines' => $this->disciplineModel->get(),
        'courses' => $this->courseModel->get(),

        ];

        return view('students.enrollments.create', $data);
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

        $value= $this->enrollmentModel->create([

            'user_id'=> Auth::user()->id,
            'course_id'=> $request->course_id

        ]);

        DB::commit();

//        dd($value);

        if ($value)
        {
            return redirect()->route('enrollment.create');
        }
        else {
            return redirect()->route('enrollment.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Enrollment::destroy($id);
        return redirect()->back();
    }
}
