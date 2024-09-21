<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::latest()->get();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:properties,slug',
            'status' => 'required',
            'type' => 'required',
            'category' => 'required',
            'featured_image' => 'required|mimes:jpg,jpeg,png,webp|max:1024',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(str_replace(' ', '-', $request->slug));
        if ($request->file('featured_image')) :
            $path = 'property/featured_images';
            $fname = time() . '_' . $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->storeAs($path, $fname, 'public');
            $input['featured_image'] = '/storage/' . $path . '/' . $fname;
        endif;
        Property::create($input);
        return redirect()->route('admin.property')->with("success", "Property created successfully!");
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
    public function edit(string $id)
    {
        $property = Property::findOrFail(decrypt($id));
        return view('admin.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:properties,slug,' . $id,
            'status' => 'required',
            'type' => 'required',
            'category' => 'required',
            'image' => 'sometimes|required|mimes:jpg,jpeg,png,webp|max:1024',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(str_replace(' ', '-', $request->slug));
        if ($request->file('featured_image')) :
            $path = 'property/featured_images';
            $fname = time() . '_' . $request->file('featured_image')->getClientOriginalName();
            $request->file('featured_image')->storeAs($path, $fname, 'public');
            $input['featured_image'] = '/storage/' . $path . '/' . $fname;
        endif;
        $property = Property::findOrFail($id);
        $property->update($input);
        return redirect()->route('admin.property')->with("success", "Property updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Property::findOrFail(decrypt($id))->delete();
        return redirect()->route('admin.property')->with("success", "Property deleted successfully!");
    }
}
