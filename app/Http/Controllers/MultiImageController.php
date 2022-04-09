<?php
namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
//use Intervention\Image\ImageManager;
use App\Models\MultiImage;
use Image;

class MultiImageController extends Controller
{
    public function multi() {
        return view('admin.multi-image.index');
    }
    public function multiInsert(Request $request) {
        $image = $request->file('multiImage');

        foreach($image as $multiImage) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($multiImage->getClientOriginalExtension());
            $img_name = $name_gen. '.' . $img_ext;
            $up_location = 'image/multiple_image/';
            $last_img = $up_location.$img_name;
            $multiImage->move($up_location, $img_name);
    
            MultiImage::insert([
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        }
        return Redirect()->back()->with('success', 'Multiple image inserted');
    }
}
