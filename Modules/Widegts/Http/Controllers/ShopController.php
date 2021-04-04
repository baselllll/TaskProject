<?php

namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Widegts\Entities\Shops;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $shop = Shops::paginate(10);
        return view('widegts::shops.index',compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
     
        return view('widegts::shops.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required',
            
        ]);
        $file = $request->file('logo');
        $destinationPath = 'Modules\Widegts\Resources\assets\images';
        $filename = 'rayda_concept_photos_'.rand(1, 1000).'.'.$file->extension();
        
    if (Storage::putFileAs($destinationPath, $file, $filename)) {
        $row = Shops::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'logo'=> $filename
        ]);
    }
       
        return redirect()->route('shope.index')->with('success');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $row = Shops::find($id);
        return view('widegts::shops.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required'
        ]);
        $file = $request->file('logo');
        
        $destinationPath = 'Modules\Widegts\Resources\assets\images';
        $filename = 'rayda_concept_photos_'.rand(1, 1000).'.'.$file->extension();
        if (Storage::putFileAs($destinationPath, $file, $filename)) {
            $row = Shops::find($id);
            $row->name = $request->input('name');
            $row->email = $request->input('email');
            $row->logo = $filename;
            $row->save();
        }

        return redirect()->route('shope.index')->with('message');
       
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $shope = Shops::find($id);
        $shope->delete();
        return redirect()->route('shope.index')->with('message');
    }
}
