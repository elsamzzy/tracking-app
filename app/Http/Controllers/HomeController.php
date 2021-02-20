<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index() {
        $request = Request::create('/api/tracking', 'GET');
        $response = Route::dispatch($request);
        $information = $response->content();
        $json = json_decode($information, true);
        $current = $json[0];
        $geo = explode(',', $json[0]['current_asset_position_coord']);
        return view('welcome', [
            'current' => $current,
            'json' => $json,
            'geo' => $geo
        ]);
    }
}
