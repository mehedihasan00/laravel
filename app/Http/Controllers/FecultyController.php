<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feculty;
use Illuminate\Support\Carbon;

class FecultyController extends Controller
{
    public function AllFeculty() {
        $feculties = Feculty::latest()->paginate(5);
        return view('admin.feculty.index', compact('feculties'));
    }

    public function StoreFeculty(Request $request) {
        $validatedData = $request->validate([
            'feculty_name' => 'required|unique:feculties|min:4',
            'feculty_image' => 'required|mimes:jpg,jpeg,png',
        ], [
            'feculty_name.required' => 'Please Input faculty Name',
            'feculty_image.min' => 'Faculty Longer Than 4 Character',
            
        ]);
        
        $feculty_image = $request->file('feculty_image');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($feculty_image->getClientOriginalExtension());
        $img_name = $name_gen. '.' . $img_ext;
        $up_location = 'image/feculty/';
        $last_img = $up_location.$img_name;
        $feculty_image->move($up_location, $img_name);

        Feculty::insert([
            'feculty_name' => $request->feculty_name,
            'feculty_image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'Faculty Inserted Successfully');
    }
}
