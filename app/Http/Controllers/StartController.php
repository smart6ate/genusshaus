<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;

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


        try
        {
            $client = new Client(['base_uri' => 'http://tasty.dev']);
            $response = $client->request('GET', 'api/v1/landingpage/places');

            $places = json_decode($response->getBody())->data;

        }
        catch (\Exception $exception)
        {
            $places = '';
        }

        return view('start.index', compact('meta','places'));
    }
}
