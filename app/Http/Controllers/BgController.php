<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Mtownsend\RemoveBg\RemoveBg;

class BgController extends Controller
{
    public function bgremover(Request $request)
    {
        // 
       
        $removebg = new RemoveBg(env("BG_REMOVER_API_KEY"));
 
        $removebg->url($request->input('photo'))->save('image.png');

        // // Get the uploaded file using the file method
        // $file = $request->file('photo');

        // // Initialize the RemoveBg library
        // $removebg = new RemoveBg(env("BG_REMOVER_API_KEY"));

        // // Save the image with remove.bg
        // $removebg->file($file)->save('image.png');
    
       
        return response()->download("image.png", "image.png");
    }
}
