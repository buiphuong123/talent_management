<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;
class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $talents = User::orderBy('created_at','desc')->paginate(10);
        if($request->get('search') != null) {
            $talents = User::where('name', 'like', '%'. $request->get('search') .'%')->orWhere('email', 'like', '%'. $request->get('search') .'%')->simplePaginate(10);
        }
        else {
            $talents = User::simplePaginate(10);
        }
        return view('talent.show')->with('talents', $talents);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $talent) //$id
    {
        $infos = explode(". ", $talent->information);
        $results = $talent->schedule;
        return view('talent.profile', ['talent' => $talent, 'infos' => $infos, 'results' => $results]);
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

    public function add(){
        return view('talent.add');
    }
    
    public function editTalent(){
        return view('talent.edit');
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
