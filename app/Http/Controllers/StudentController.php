<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
		return Inertia::render('Student/StudentIndex', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Student/NewStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $student = Student::create([
			'name'       => $request->name,
			'lastname'   => $request->lastname,
			'email'      => $request->email,
			'smartphone' => $request->smartphone,
			'date_birth' => $request->date_birth,
			'belt'       => $request->belt,
			'graduation' => $request->graduation
        ]);

		$students = Student::all();

		return Inertia::render('Student/StudentIndex', [
			'student_name' => $student['name'], 'students' => $students
		]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
