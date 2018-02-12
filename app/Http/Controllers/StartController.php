<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $path = base_path('data/start.json');


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

        return view('start.index', compact('meta'));
    }
}
