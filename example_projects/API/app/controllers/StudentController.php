<?php namespace App\Controllers;

use App\Models\Student;
use \Auth;

class StudentController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // return all students in database
        return Student::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::only('first_name', 'last_name', 'bio', 'age');
        // Make a new Student
        Student::create($input);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        Student::find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = Input::only('bio');
        //
        $student = Student::find($id);
        $student->bio = $input['bio'];
        $student->save();

        return $student;
    }
}
