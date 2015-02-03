<?php namespace App\Controllers;

use \Auth;
use \Input;

use App\Models\Solution;


class SolutionsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Solution::all();
        // return all Student Solutions for user
        // return Auth::user()->student->solutions;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // Create new entry in database
        return [
            'student_id' => [
                'type' => 'integer',
                'description' => 'id of student who created'
            ],
            'project_id' => [
                'type' => 'integer',
                'description' => 'id of project being solved'
            ],
            'body' => [
                'type' => 'string',
                'description' => 'Text of solution'
                ]
        ];
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // Create new student Solution
        $input = Input::only('week_id', 'project_id', 'body');
        return Solution::create($input);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // Return solution with id
        return Solution::find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // update the resource in storage
        $input = Input::only('week_id', 'project_id', 'body');
        $solution = Solution::find($id);

        for ($i; $i<= count($input); $i++) {
            if ($i != null) {
                $solution->{$i} = $input[$i];
            }
        }

        $solution->save();

        return $solution;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete the solution
        return Solution::find($id)->destroy();
    }


}
