<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'street' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $people = new People;
        $people->name = $request->name;
        $people->phone = $request->phone;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;
        $people->email = $request->email;
        $people->password = $request->password;
        $people->save();
        // return response()->json(['message'=>'Person added successfully'], 200);
        return $people;
    }
    public function edit(Request $request)
    {
        $people = People::findorfail($request->id);
        $people->name = $request->name;
        $people->phone = $request->phone;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;
        $people->email = $request->email;
        $people->password = $request->password;

        $people->update();
        return $people;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request) 
    {
        $people = People::findorfail($request->id)->delete();
        return response()->json('Deleted successfully');
    }
    public function read($request)
    {
        $people = People::where("id", $request)->get();
        return $people;
    }
}
