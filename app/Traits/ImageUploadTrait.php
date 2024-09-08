<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait ImageUploadTrait {

    /*
     * upload Image
     */
    public function uploadImage(Request $request,  $inputName, $path)
    {
        if ($request->hasFile($inputName))
        {

            $image = $request->$inputName;
            $imageName = rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path($path), $imageName);
            return $path . '/' . $imageName;
        }
    }
}
