<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created Slider in storage.
     */
    public function store(SliderRequest $request)
    {
       $banner = $this->uploadImage($request, 'banner', 'uploads/frontend_images');

        Slider::created([
            'banner' => $banner,
            'type' => $request->type,
            'title' => $request->title,
            'starting_price' => $request->starting_price,
            'btn_url' => $request->btn_url,
            'serial' => $request->serial,
            'status' => $request->status,
        ]);
        toastr()->success('Slider created successfully');
        return redirect()->route('admin.sliders.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
