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
    public function getJson(){
        return [
            array(
                'title' => 'Google',
                'url' => 'https://www.google.com'
            ),
            array(
                'title' => 'Yandex',
                'url' => 'https://yandex.ua/'
            )
        ];
    }
    public function chartData()
    {
        return[
            'labels' => ['март' , 'апрель' , 'май' , 'июнь'],
            'datasets' => array([
                'label' => 'Salling',
                'backgroundColor' => '#F26202',
                'data' => [15000,50000,10000,80000],
            ])
        ];
    }
}