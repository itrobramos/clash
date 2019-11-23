<?php

namespace App\Http\Controllers;

use App\Speed;
use Illuminate\Http\Request;

class SpeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['speeds'] = Speed::paginate(10);
        return view('speed/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('speed/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = request()->all();
        $data = request()->except('_token');
        Speed::insert($data);

        return redirect('speed')->with('Message','Speed created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function show(Speed $speed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminateº\Http\Response
     */
    public function edit($id)
    {
        $speed = Speed::findOrFail($id);
        return view('speed.edit', compact('speed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->except(['_token','_method']);
        Speed::where('id','=',$id)->update($data);

        return redirect('speed')->with('Message','Speed modified successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speed  $speed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Speed::destroy($id);
        return redirect('speed')->with('Message','Speed deleted successfully');
    }
}
