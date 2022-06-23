<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classes = History::orderBy('id','ASC')->get();
        return response()->json($classes);
    }
    public function news(Request $request){
        $classes = History::orderBy('id','ASC')->where('name','like','%'.$request->name.'%');
        return response()->json($classes);
    }

    public function addPerson(Request $request)
    {
        $addPersons = new History();
        $addPersons->name = $request->name;
        $addPersons->email = $request->email;
        $addPersons->presence = $request->presence;
        $addPersons->departure = $request->departure;
        $addPersons->save();
        return response()->json(['msg'=>"Add Person Successfully"]);
    }
    public function editPerson(Request $request,$id)
    {
        $addPersons = History::Find($id);
        $addPersons->name = $request->name;
        $addPersons->email = $request->email;
        $addPersons->presence = $request->presence;
        $addPersons->departure = $request->departure;
        $addPersons->save();
        return response()->json(['msg'=>"Edit Person Successfully"]);
    }
    public function login(Request $request){
        $check = History::where('email',$request->email)->first();
        if (!$check){
            return response()->json(['msg'=>"That's Email not Exist"],401);
        }
        if (Hash::check($request->password, $check->password)){
            $token = $check->createToken('Laravel Password Grant Client')->accessToken;
            $response = ['token' => $token];
            return response($response,200);
        }else{
            $response = ["message" => "Password Error"];
            return response($response,422);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\History $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\History $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\History $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\History $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
