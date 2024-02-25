<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;

class ItemController extends Controller
{

    public function all(){
        $items = Item::with('user')->get();
        return view('items.index', ['items' => $items]);
    }
    public function create(){
        $users = User::all();
        return view('items.create', ['users' => $users]);
        // return view('items.create', compact('users'));
    }

    public function store(Request $request){
        // dd($request->all());
        $item = new Item();
        $item->title = $request->title;
        $item->descriptoin = $request->description;
        $item->user_id = $request->user_id;
        $item->price = $request->price;

        $item->save();

        return redirect()->back()->with('message', 'Saved successfully');



    }
}
