<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class PrivacyController extends Controller
{
    public function index()
    {

        $path = base_path('data/privacy.json');

        if(File::exists($path))
        {
            try
            {
                $meta = json_decode(File::get($path));
            }
            catch (\Exception $e)
            {
                $meta = null;
            }
        }
        else
        {
            $meta = null;
        }


        return view('privacy.index', compact('meta'));
    }
}
