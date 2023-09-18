<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default settings
    |--------------------------------------------------------------------------
    */

    'default' => [
        'library' => 'highcharts',
        'title' => null,
        'type' => 'line',
        'container' => 'chart',
        'height' => 400,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default database settings
    |--------------------------------------------------------------------------
    */

    'database' => [
        'table' => 'your_table_name',
        'order_column' => 'id',
        'order_display_column' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Highcharts settings
    |--------------------------------------------------------------------------
    */

    'highcharts' => [
        'title' => [
            'text' => 'My Chart',
        ],
        'responsive' => true,
        'tooltips' => [
            'enabled' => true,
        ],
        'xAxis' => [
            'title' => [
                'text' => 'X Axis',
            ],
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Y Axis',
            ],
        ],
    ],
];

