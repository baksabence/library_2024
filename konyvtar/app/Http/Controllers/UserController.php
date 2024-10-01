<?php

namespace App\Http\Controllers;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Console\View\Components\Task;
=======
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new User();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        $record = User::find($id);
        $record->fill($request->all());
        $record->save;
=======
        //
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        User::find($id)->delete();
=======
        //
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
    }
}
