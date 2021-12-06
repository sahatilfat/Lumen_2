<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use \Illuminate\Http\Request;
// use Illuminate\Http\Response;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('age', ['except' => ['getUser']]);
    }

    public function generateKey()
    {
        return Str::random(32);
    }

    public function fooExample()
    {
        return 'Example Controller from POST Request';
    }

    public function getUser($id)
    {
        return 'User id = ' . $id;
    }

    public function getPost($cat1, $cat2)
    {
        return 'Categori 1 = ' . $cat1 . 'Categori 2' . $cat2;
    }

    public function getProfile()
    {
        echo '<a href="' . route('profile.action') . '">Profile Action</a>';
    }

    public function getProfileAction()
    {
        return "Router Profile : " . route('profile');
    }

    public function fooBar(Request $request)
    {

        // if ($request->is('foo/bar')) {
        //     return 'Success';
        // } else {
        //     return 'Fail';
        // }
        // return $request->path();

        return $request->method();
    }

    public function userProfile(Request $request)
    {
        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['email'] = $request->email;


        // return $user;

        // return $request->all();

        // return $request->input('name', 'John Doe');
        // if ($request->filled('name', 'email')) {
        //     return 'Success';
        // } else {
        //     return 'Fail';
        // }

        return $request->except(['username', 'email']);
    }

    public function response()
    {
        // $data['status'] = 'Success';

        // return (new Response($data, 201))
        //     ->header('Content-Type', 'application/json');

        // return response($data, 201)->header()->header()->header();
        return response()->json([
            'message' => 'Fail! Not Found',
            'status' => false,
        ], 404);
    }

    //
}
