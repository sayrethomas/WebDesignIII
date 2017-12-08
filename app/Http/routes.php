<?php

use App\Temp;
use Illuminate\Http\Request;

/**
 * Display All Temps
 */
Route::get('/', function () {
    return view('temps');
});

/**
 * Add A New Temp
 */
Route::post('/temp', function (Request $request) {
    //
});

/**
 * Delete An Existing Temp
 */
Route::delete('/temp/{id}', function ($id) {
    //
});

Route::post('/temp', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // Create The Task...
});