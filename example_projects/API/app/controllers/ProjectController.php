<?php namespace App\Controllers;

use App\Models\Project;

class ProjectController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Return All Projects
        return Project::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($weekId)
    {
        // Create a new project
        return Week::find($weekId)->projects;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($projectId)
    {
        // Find a specific project
        return Project::find($projectId);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($projectId)
    {
        // Update a project
        $input = Input::only('description', 'difficultly_level', 'weekId');
        $project = Project::find($projectId);
        foreach ($input as $i) {
            if ($input[$i] != null) {
                $project->{$i} = $input[$i];
            }
        }
        $project->save();
        return $project;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($weekId, $projectId)
    {
        // delete the project
        return Project::find($projectId)->delete();
    }


}
