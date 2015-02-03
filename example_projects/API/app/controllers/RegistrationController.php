<?php
namespace App\Controllers;

use \Auth;
use \Input;
use \App;
use \Response;
use \Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Student;
use App\Models\User;

class RegistrationController extends \BaseController
{
    public function __construct()
    {
        App::error(function (ModelNotFoundException $e) {
            return Response::json('Email Not Found!', 400);
        });
    }

    public function index()
    {
        return [
            'methods' => 'post',
            'urls' => '/api/register',
            'data' => [
                'firstName' => 'Your first name',
                'lastName' => 'Your last name',
                'firstEmail' => 'Your email you use for class'
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
        // Store a new Registration
        $input = Input::only('firstName', 'lastName', 'firstEmail', 'username', 'password');
        $student = Student::where('email', $input['firstEmail'])->firstOrFail();

        // Check if username exists
        if (User::where('username', $input['username'])->get()->count() > 0) {
            return Response::make('Username Already Taken', 400);
        }
        if ($student->user != null) {
            return Response::make('Student Already Registered!', 400);
        }

        // If they don't, save the user
        $student->first_name = $input['firstName'];
        $student->last_name = $input['lastName'];
        $student->email = $input['firstEmail'];
        $student->save();

        $user = new User;
        $user->password = Hash::make($input['password']);
        $user->student_id = $student->id;
        $user->username = $input['username'];
        $user->save();

        return Response::json($user->load('student'), 201);
    }
}
