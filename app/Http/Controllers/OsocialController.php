<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Osocial;

class OsocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $osociales = Osocial::latest()->paginate(5);
        return view('osocials.index',compact('osociales'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('osocials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
        ]);
        Osocial::create($request->all());
        return redirect()->route('osociales.index')->with('success','O.Social created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $osocial = Osocial::find($id);
        return view('osocials.show', compact('osocial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $osocial = Osocial::find($id);
        return view('osocials.edit', compact('osocial'));
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
        request()->validate([
            'nombre' => 'required',
        ]);
        Osocial::find($id)->update($request->all());
        return redirect()->route('osociales.index')->with('success','O.Social updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Osocial::find($id)->delete();
        return redirect()->route('osociales.index')->with('success','O.Social deleted successfully');
    }
}
