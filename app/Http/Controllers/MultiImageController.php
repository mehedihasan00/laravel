<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiImageController extends Controller
{
    public function multi() {
        return view('admin.multi-image.index');
    }
}
