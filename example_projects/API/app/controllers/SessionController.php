<?php
namespace App\Controllers;

use \Session;
use \Auth;
use \Response;
use \App;
use \Input;
use \Hash;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SessionController extends \BaseController {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Get current user session
        if (Auth::check()) {
            return Auth::user();
        }
        return Response::make('Not Authorized', 401);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // Login the user
        $input = Input::only('username', 'password');
        try {
            $user = User::where('username', $input['username'])->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return Response::make("Incorrect Username", 401);
        }
        if (Hash::check($input['password'], $user->password)) {
            Auth::login($user);
            return Auth::user();
        } else {
            return Response::make("Incorrect Password", 401);
        }

        return Response::make("Incorrect Something", 401);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // Logout the user
        Auth::logout();
        return Response::make(201);
    }


}
