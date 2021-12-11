<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public $disciplineModel;
    public $courseModel;
    public function __construct(Discipline $discipline,Course $course)
    {
        $this->disciplineModel = $discipline;
        $this->courseModel = $course;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'disciplines' => $this->disciplineModel->get(),
            'courses' => $this->courseModel->get()
        ];


        return view('institutions.discipline.index', $data);
    }
    public function stuIndex()
    {
        $data = [
            'disciplines' => $this->disciplineModel->get(),
            'courses' => $this->courseModel->get()
        ];


        return view('students.disciplines.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'disciplines' => $this->disciplineModel->get(),
            'courses' => $this->disciplineModel->get(),
        ];
        return view('institutions.discipline.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $value= $this->disciplineModel->create([
            'name'=> $request->name,
        ]);

        if ($value)
        {
            return redirect()->route('discipline.index');
        }
        else {
            return redirect()->route('discipline.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function show(Discipline $discipline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function edit(Discipline $discipline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discipline $discipline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discipline $discipline)
    {
        //
    }
}
