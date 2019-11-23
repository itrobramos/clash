<?php

namespace App\Http\Controllers;

use App\Quality;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['qualities'] = Quality::paginate(10);
        return view('quality/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quality/create');
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
        Quality::insert($data);

        return redirect('quality')->with('Message','Quality created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function show(Quality $quality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quality = Quality::findOrFail($id);
        return view('quality.edit', compact('quality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->except(['_token','_method']);
        Quality::where('id','=',$id)->update($data);

        return redirect('quality')->with('Message','Quality modified successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quality  $quality
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quality::destroy($id);
        return redirect('quality')->with('Message','Quality deleted successfully');
    }
}
