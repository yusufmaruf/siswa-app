<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students-classes.index',[
            'classes'=> StudentClass::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students-classes.create',[
            'classes' => StudentClass::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new StudentClass();
        $class->name= $request->name;
        $class->slug = $request->slug;
        $class->save();
        session()->flash('success','Data Berhasil di Perbarui');
        return redirect()->route('studentsClass.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('students-classes.show',[
            'class' => StudentClass::find($id),
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
        $class = StudentClass::find($id);
        return view('students-classes.edit',[
            'class' => $class,
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
        $class = StudentClass::find($id);
        
        $class->name= $request->name;
        $class->slug = $request->slug;

        $class->save();
        session()->flash('info','Data Berhasil di Perbarui');
        return redirect()->route('studentsClass.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = StudentClass::find($id);
        $class->delete();
        session()->flash('danger','Data Berhasil di Perbarui');
        return redirect()->route('studentsClass.index');
    }
}
