<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class LocationDetailsController extends Controller
{
    public function index(Request $request) {
        $requests = Request::create('/api/tracking/'.$request['track'], 'GET');
        $response = Route::dispatch($requests);
        $information = $response->content();
        $json = json_decode($information, true);
        $geo = explode(',', $json['current_asset_position_coord']);
        return view('details', [
            'current' => $json,
            'geo' => $geo
        ]);
    }
}
