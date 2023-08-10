<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnotherController extends Controller
{
    public function show(Request $request)
    {
        $imageValue = $request->query('imageValue');

        // Pass the image value to the view
        return view('another-view')->with('imageValue', $imageValue);
    }
}
?>