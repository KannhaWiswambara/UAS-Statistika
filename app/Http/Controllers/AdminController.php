<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('pages.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStudentRequest $request)
    {
        Student::create($request->all());
        return redirect()->route('student-data.index')->with('success', 'Succesfully added student data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('pages.index', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('pages.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $request
     * @param  \App\Models\Student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request,$id)
    {
        $messages = [
            'required'=>'Atribute must filled',
            'file'=>'File exceed the size'
        ];
        $validasi=$request->validate([
            'name'=>'required',
            'student_id'=>'',
            'gpa'=>'required',
        ], $messages);
        try {
            $response = Student::find($id)->create($validasi);
            return redirect()->route('student-data.index')->with('success', 'Successfully edited student data!');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $student=Student::where('student_id',$id);
            $student->delete();
            return redirect()->route('student-data.index')->with('success', 'Successfully deleted student data!');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
