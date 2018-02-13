<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;

class PlacesController extends Controller
{
    public function show($uuid)
    {

        try
        {
            $client = new Client(['base_uri' => 'http://tasty.dev']);
            $response = $client->request('GET', 'api/v1/landingpage/places/show/' . $uuid);

            $place = json_decode($response->getBody())->data;

        }
        catch (\Exception $exception)
        {
            $place = '';
        }

        if(empty($place))
        {
            return back();
        }


        try
        {

            $client = new Client(['base_uri' => 'http://tasty.dev']);
            $response = $client->request('GET', 'api/v1/landingpage/places/recommendations/' . $uuid);

            $recommendations = json_decode($response->getBody())->data;


        }
        catch (\Exception $exception)
        {

            $recommendations = '';
        }




        return view('places.show', compact('place','recommendations'));
    }
}
