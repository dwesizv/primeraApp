<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use \Exception;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['places'] = Place::all();
        return view('place.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $data['message'] = 'A new place has been inserted successfully.';
        $data['type'] = 'success';
        $place = new Place($request->all());
        try {
            $result = $place->save();//insert, update
        } catch(Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The place can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('place')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('place.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('place.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        return redirect('place');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $data = [];
        $data['message'] = 'The place ' . $place->name . ' has been removed.';
        $data['type'] = 'success';
        try {
            $place->delete();
        } catch(Exception $e) {
            $data['message'] = 'The place ' . $place->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('place')->with($data);
    }
}
