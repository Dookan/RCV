<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\User;
use Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vehicles = Vehicle::orderBy('id', 'asc')->paginate();
        $vehicles = Vehicle::all();
        $counter = 0;

        return view('admin-modules.admin-vehicles', compact('vehicles','counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user-modules.vehicle-create');
    }

    public function create_admin()
    {
        return view('admin-modules.admin-vehicle-create');
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
            'marca' => 'required|max:20',
            'modelo'=> 'required|max:20'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $vehicle = new Vehicle;
        $vehicle->user_id = $user_id;
        $vehicle->marca = $request->input('marca');
        $vehicle->modelo= $request->input('modelo');
        $vehicle->save();


        return redirect('dashboard');
    }

    public function store_admin(Request $request)
    {
        $this->validate($request, [
            'marca' => 'required|max:20',
            'modelo'=> 'required|max:20'
        ]);

        $vehicle = new Vehicle;
        $vehicle->marca = $request->input('marca');
        $vehicle->modelo= $request->input('modelo');
        $vehicle->save();

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $vehicles = Vehicle::orderBy('id', 'asc')->paginate(2);
        // $vehicles = Vehicle::orderBy('id', 'asc')->paginate(5);
        
        // $vehicles = U_V::find($user_id)->vehicle;
        // $relation = U_V::find($id);

        $user = Auth::user();
        $user_id = $user->id;
        $vehicles = User::find($user_id)->vehicles;
        $counter = 0;


        return view('user-modules.vehicles', compact('vehicles','counter'));

    }

    public function show_admin($id)
    {
        return 0;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
