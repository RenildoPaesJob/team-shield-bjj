<?php

namespace App\Http\Controllers;

use App\DTO\CreateStudentDTO;
use App\DTO\UpdateStudentDTO;
use App\Http\Requests\StudentRequest;
use App\Services\StudentServices;
use GuzzleHttp\Psr7\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
	public function __construct(
		protected StudentServices $service
	) { }
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request)
	{
		$students = $this->service->getAll($request->filter);
		dd($students);
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
		$this->service->new(
			CreateStudentDTO::makeFromRequest($request)
		);

		$students = $this->service->getAll();

		return Inertia::render('Student/StudentIndex', [
			'students' => $students
		]);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		if (!$student = $this->service->findOne($id)) {
			return Inertia::render('Student/StudentIndex');
		};

		return Inertia::render('Student/ShowStudent', [
			'student' => $student
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		if (!$student = $this->service->findOne($id)) {
			return Inertia::render('Student/StudentIndex');
		}

		return Inertia::render('Student/EditStudent',  [
			'dataStudent' => $student
		]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(StudentRequest $request, string $id)
	{
		$student = $this->service->update(
			UpdateStudentDTO::makeFromRequest($request)
		);

		if (!$student) {
			return back();
		}

		return redirect()->route('student.index');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		$this->service->delete($id);

		return redirect()->route('student.index');
	}
}
