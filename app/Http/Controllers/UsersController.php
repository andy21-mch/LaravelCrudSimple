<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        // dd($request->all()); //stop process and print data to the page
        $user = new User();

        $user->name = $request->name; // map the user attribute to the corresponding request attribute
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save(); // save the data to the databases

        return redirect()->back()->with('message', 'Saved successfully');
    }
}
