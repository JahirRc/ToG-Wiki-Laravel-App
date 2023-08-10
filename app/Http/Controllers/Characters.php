<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Characters extends Controller
{
    public static function chargeCharacters(Request $request)
    {
        $data = '';
        
        $students = json_decode(file_get_contents(storage_path() . "/characters.json"), true);

        foreach ($students as $key => $value) {

            $data .= '<div class="img-wrapper" data-name="'.$value['name'].'"
            data-rarity="'.$value['rarity'].'" 
            data-type="'.$value['type'].'" 
            data-class="'.$value['class'].'"
            data-color="'.$value['element'].'">'.
            
            '<img loading="lazy" data-image-value="'.$key.'" src="'.$value['image'].'" alt="Image 4" class="draggable-image">'.
            '</div>';
        }

        if ($request->ajax()) {
            return response()->json(['data' => $data]);
        }
    
        return view('welcome')->with('data', $data);
    }
}
