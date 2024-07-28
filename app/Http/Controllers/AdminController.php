<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index') ->with('admins',$admins);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'fname'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'description'=>'nullable'
        ]);
       Admin::create([
            'name'=>$request->name ,
            'fname'=>$request->fname,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'description'=>$request->description
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        
        return view('admin.edit')
        ->with('admin',Admin::find($id));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    
    {
        $req->validate([
            'name'=>'required',
            'fname'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'description'=>'nullable'
        ]);
        
        $id = Admin::findOrFail($id);
        $id->name = $req->name;
        $id->fname = $req->fname;
        $id->phone = $req->phone;
        $id->address = $req->address;
        $id->description = $req->description;

        $id->save();
        return redirect()->route('admin.index');
    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        return redirect()->route('admin.index');
    }
}
