<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members',[
            'members'=>Members::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new',[
            "members" => Members::all()
        ]);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|max:255|min:3|unique:members',
            'address' => "required",
            "phone" => "required",
            "up_id" => "required",
        ]);

        $new = new Members;
        $new->nama = $validatedData['nama'];
        $new->phone = $validatedData['phone'];
        $new->address = $validatedData['address'];
        $new->up_id = $validatedData['up_id'];

        $new->save();

        $up = Members::find($validatedData['up_id']);

        if($up->down1_id == NULL){
            $up->down1_id = $new->id;
            $up->save();
        }else{
            $up->down2_id = $new->id;
            $up->save();
        }

        // if($up->down1_id == NULL){
        //     $up->down1()->save($new);
        // }else{
        //     $up->down2()->save($new);
        // }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(Members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Members $members)
    {
        dd($members->nama);
    }
}
