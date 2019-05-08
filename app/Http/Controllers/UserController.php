<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{

        /* The below routes to the login page
    * in the event of a timeout or non logged in user
    *accessing any of the below pages*/
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index()
    {
        $users = User::whereNull('approved_at')->get();

        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }

}
