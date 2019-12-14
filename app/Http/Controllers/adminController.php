<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = admin::all();
        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'color_id'  => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'price' => 'required',
            'weight' => 'required'            
        ]);

    if ($request->hasFile('image')){
        $file = $request->file('image');
        $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/products', $filename);

        $products = admin::create([
            'name' => $request->name,
            'slug' => $filename,
            'color_id'  => $request->color_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $filename,
            'price' => $request->price,
            'weight' => $request->weight
            
        ]);

        return redirect('/admin')->with('status', 'Data Barang Berhasil Ditambahkan');
    }
}
    

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
