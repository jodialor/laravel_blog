<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class UserController extends Controller
{
    public function __construct() {
      // Permitir que só os admins acedam à info dos users
      $this->middleware(['auth', 'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      // create a variable and store all the users in it from the database
      $users = User::orderBy('id', 'asc')->paginate(5);

      // return a view and pass in the above variable
      return view('users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request) {
      // validate the data
      $this->validate($request, array(
        'name' => 'required|max:255',
        'email' => 'required',
        'password' => 'required',
        'is_admin' => 'required'
        ));

      // store data in the database
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->is_admin = $request->is_admin;

      $user->save();

      // Set flash data with success message
      Session::flash('success', 'The user was succesfully created!');

      // redirect to index users page
      return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
      $user = User::find($id);
      return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
      // find the user in the database and save as a var
      $user = User::find($id);

      // return the view and pass in the var we previously created
      return view('users.edit')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
      // Validate the database
      $this->validate($request, array(
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'password' => 'required|min:6',
        'is_admin' => 'required'
        ));

      $user = User::find($id);

      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->is_admin = $request->input('is_admin');

      $user->save();

      // Set flash data with success message
      Session::flash('success', 'This user was succesfully saved.');

      // Redirect with flash data to users.show
      return redirect()->route('users.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
      $user = User::find($id);

      $user->delete();

      Session::flash('success', 'The user was succesfully deleted.');

      return redirect()->route('users.index', $user->id);
    }
}
