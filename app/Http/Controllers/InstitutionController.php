<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstitutionController extends Controller
{
    public $instituteModel;
    public $userModel;
    public function __construct(Institution $institution, User $user)
    {

        $this->instituteModel= $institution;
        $this->userModel= $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('institutions.index');
    }

    public function stuIndex()
    {


        $institutions = $this->instituteModel->get();
        return view('students.institutions.index', compact('institutions'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $institutes = $this->instituteModel->get();
        return view('institutions.lists.create', compact('institutes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $value= $this->instituteModel->create([
           'name'=> $request->name,
           'description' =>$request->description,
        ]);

        if ($value)
        {
            return redirect()->route('institution.list');
        }
        else {
            return redirect()->route('institution.create');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Institution $institution)
    {
       //
    }


    public function list()
    {
        $institutions = $this->instituteModel->get();
        return view('institutions.lists.index', compact('institutions'));
    }


    public function user()
    {
        $user = auth()->user();
        return view('institutions.user', compact('user'));
    }

    public function notification()
    {
        return view('institutions.notifications.notification');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institution $institution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        //
    }

}
