<?php namespace App\Controllers;

use \Response;
use App\Models\Week;
use \Input;

class WeeksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Return all weeks
		return Week::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Return a week object
		return [
			'number' => [
				'type' => 'integer',
				'description' => 'The week number'
			],
			'subject' => [
				'type' => 'string',
				'description' => 'Main subject of the week'
			],
			'description' => [
				'type' => 'string',
				'description' => 'Description of the week'
			],
			'project' => [
				'type' => 'integer',
				'description' => 'id of main project for the week'
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
		// Create a new resource in the database
		$input = Input::only('number', 'subject', 'description', 'project');
		return Week::create($input);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// return the specified week
		return Week::find($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Store a specific week
		$input = Input::only('number', 'subject', 'description', 'project');
		$week = new Week;
		for ($i; $i <= count($input); $i++) {
			if ($i != null) {
				$week->{$i} = $input[$i];
			}
		}
		$week->save();

		return $week;
	}
}
