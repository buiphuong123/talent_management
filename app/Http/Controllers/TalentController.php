<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talents = User::orderBy('created_at','desc')->paginate(10);
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
        $talent = new User;
        $talent->name = $request->tname;
        $talent->email = $request->email;
        $talent->password = $request->password;
        $talent->gender = $request->input('gender');
        $talent->role = $request->input('role');
        $talent->join_company_date = $request->date;
        $talent->information = $request->description;
        $talent->save();
        return view('talent.add');
    }

    public function addTalent(){
        return view('talent.add');
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
        return view('talent.profile', ['talent' => $talent, 'infos' => $infos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function editTalent($id){
        return view('talent.edit')->with('talent', User::find($id));
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
        $data = request()->all();
        $talent = User::find($id);
        $talent->name = $data['tname'];
        $talent->email = $data['email'];
        $talent->gender = $request->has('gender');;
        $talent->role = $request->has('role');;
        $talent->join_company_date = $data['date'];
        $talent->information = $data['description'];
        $talent->save();
        return view('talent.edit')->with('talent', User::find($id));
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
