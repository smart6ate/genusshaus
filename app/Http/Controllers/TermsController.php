<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TermsController extends Controller
{
    public function index()
    {

        $path = base_path('data/terms.json');

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

        return view('terms.index', compact('meta'));
    }
}
