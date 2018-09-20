<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Events\NewEvent;

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

    public function getJson()
    {
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
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array([
                'label' => 'Salling',
                'backgroundColor' => ['#D01919', '#F26202', '#EAAE00', '#B5CC18'],
                'data' => [15000, 50000, 10000, 80000],
            ],
                [
                    'label' => 'Last Salling',
                    'backgroundColor' => ['#D01919', '#B5CC18'],
                    'data' => [18000, 55000, 7000, 60000],
                ]
            )
        ];
    }

    public function chartRandom()
    {
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array([
                'label' => 'Silver',
                'backgroundColor' => '#16AB39',
                'data' => [rand(0, 40000), rand(0, 40000), rand(0, 40000), rand(0, 40000)],
            ],
                [
                    'label' => 'Gold',
                    'backgroundColor' => '#B5CC18',
                    'data' => [rand(0, 40000), rand(0, 40000), rand(0, 40000), rand(0, 40000)],
                ])
        ];
    }

    public function newEvent(\Illuminate\Http\Request $request)
    {
        $result = [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array([
                'label' => 'Salling',
                'backgroundColor' => ['#D01919', '#F26202', '#EAAE00', '#B5CC18'],
                'data' => [15000, 50000, 10000, 80000],
                ])
        ];

        if($request->has('label')){
            $result['labels'][] = $request->input('label');
            $result['datasets'][0]['data'][] = (integer)$request->input('sale');
            if($request->has('realtime')){
                if(filter_var($request->input('realtime'), FILTER_VALIDATE_BOOLEAN )){
                    event(new \App\Events\NewEvent($result));
                }
            }

        }

        return $result;
    }
}