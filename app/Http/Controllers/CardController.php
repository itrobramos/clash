<?php

namespace App\Http\Controllers;

use App\Card;
use App\Quality;
use App\Speed;
use App\Target;
use App\Type;

use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cards'] = Card::paginate(10);
        return view('card/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['types'] = Type::all();
        $data['targets'] = Target::all();
        $data['qualities'] = Quality::all();
        $data['speeds'] = Speed::all();

        return view('card/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->except('_token');
        $Card = new Card();
        $Card->imageUrl = '';


        if($request->hasfile('imageUrl')) 
        { 
            $file = $request->file('imageUrl');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            $Card->imageUrl = 'uploads/images/'. $filename;

        }

        $Card->name = $request->Name;
        $Card->description = $request->Description;
        $Card->elixir = $request->Elixir;
        $Card->range = $request->Range;
        $Card->speedId = $request->SpeedId;
        $Card->typeId = $request->typeId;
        $Card->qualityId = $request->qualityId;
        $Card->targetId = $request->targetId;
        $Card->save();

        return redirect('card')->with('Message','Card created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminateº\Http\Response
     */
    public function edit($id)
    {
        $card = Card::findOrFail($id);
        $data['card'] = $card;
        $data['types'] = Type::all();
        $data['targets'] = Target::all();
        $data['qualities'] = Quality::all();
        $data['speeds'] = Speed::all();

        return view('card.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Card = Card::findOrFail($id);

        $Card->name = $request->Name;
        $Card->description = $request->Description;
        $Card->elixir = $request->Elixir;
        $Card->range = $request->Range;
        $Card->speedId = $request->SpeedId;
        $Card->typeId = $request->typeId;
        $Card->qualityId = $request->qualityId;
        $Card->targetId = $request->targetId;

        if($request->hasfile('imageUrl')) 
        { 
            $file = $request->file('imageUrl');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            $Card->imageUrl = 'uploads/images/'. $filename;
        }

        $Card->save();        
        return redirect('card')->with('Message','Card modified successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Card::destroy($id);
        return redirect('card')->with('Message','Card deleted successfully');
    }
}
