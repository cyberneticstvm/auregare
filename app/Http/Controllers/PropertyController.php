<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use Exception;
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
        try {
            $input = $request->except(array('images'));
            $input['slug'] = strtolower(str_replace(' ', '-', $request->slug));
            if ($request->file('featured_image')) :
                $path = 'property/featured_images';
                $fname = time() . '_' . $request->file('featured_image')->getClientOriginalName();
                $request->file('featured_image')->storeAs($path, $fname, 'public');
                $input['featured_image'] = '/storage/' . $path . '/' . $fname;
            endif;
            $property = Property::create($input);
            if ($request->file('images')):
                $images = $request->file('images');
                foreach ($images as $key => $item):
                    $path = 'property/images';
                    $fname = time() . '_' . $item->getClientOriginalName();
                    $item->storeAs($path, $fname, 'public');
                    PropertyImage::insert([
                        'property_id' => $property->id,
                        'name' => '/storage/' . $path . '/' . $fname,
                    ]);
                endforeach;
            endif;
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
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
        $images = PropertyImage::where('property_id', $property->id)->get();
        return view('admin.property.edit', compact('property', 'images'));
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
        try {
            $input = $request->except(array('images'));
            $property = Property::findOrFail($id);
            $input['slug'] = strtolower(str_replace(' ', '-', $request->slug));
            if ($request->file('featured_image')) :
                $path = 'property/featured_images';
                $fname = time() . '_' . $request->file('featured_image')->getClientOriginalName();
                $request->file('featured_image')->storeAs($path, $fname, 'public');
                $input['featured_image'] = '/storage/' . $path . '/' . $fname;
            endif;
            if ($request->file('images')):
                $images = $request->file('images');
                foreach ($images as $key => $item):
                    $path = 'property/images';
                    $fname = time() . '_' . $item->getClientOriginalName();
                    $item->storeAs($path, $fname, 'public');
                    PropertyImage::insert([
                        'property_id' => $property->id,
                        'name' => '/storage/' . $path . '/' . $fname,
                    ]);
                endforeach;
            endif;
            $property->update($input);
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
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

    public function removeImage(string $id)
    {
        PropertyImage::findOrFail(decrypt($id))->delete();
        return redirect()->back()->with("success", "Property image removed successfully!");
    }
}
