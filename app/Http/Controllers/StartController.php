<?php

namespace App\Http\Controllers;

class StartController extends Controller
{
    public function index()
    {
        $url_data = [
            array(
                'title' => 'DKA-DEVELOP',
                'url' => 'https://dka-develop.ru'
            ),
            array(
                'title' => 'YouTube',
                'url' => 'https://www.youtube.com'
            )

        ];

        return view('start', ['url_data' => $url_data]);
    }
}