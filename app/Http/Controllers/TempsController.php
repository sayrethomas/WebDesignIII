<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temp;
use App\User;
class TempsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$temps = Temp::all();
        return view('temps.index')->with('temps', $temps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request, [
		'temp' => 'required',
		'humidity' => 'required']);
		
		//Create Post
		$temp =  new Temp;
		$temp->temp = $request->input('temp');
		$temp->humidity = $request->input('humidity');
		$temp->user_id = auth()->user()->id;
		$temp->save();
		
		return redirect('/temps')->with('success', 'Reading Recorded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $temp = Temp::find($id);
		$user_id = auth()->user()->id;
		$user = User::find($user_id);
		return view('temps.show')->with('temp', $temp)->with('temps', $user->temps);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $temp = Temp::find($id);
		 return view('temps.edit')->with('temp', $temp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
		'temp' => 'required',
		'humidity' => 'required']);
		
		//Create Post
		$temp = Temp::find($id);
		$temp->temp = $request->input('temp');
		$temp->humidity = $request->input('humidity');
		$temp->save();
		
		return redirect('/temps')->with('success', 'Reading Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp = Temp::find($id);
		$temp->delete();
		
		return redirect('/temps')->with('success', 'Reading Removed');
    }
}
