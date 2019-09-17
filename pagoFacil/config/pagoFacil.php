<?php

return [
    'ws' => [
        'url' => 'https://sandbox.pagofacil.tech',
        'options' => [
            'usuario' => env('IDUSER'),
            'sucursal' => env('IDSUCURSAL'),
            'uri' => '/Wsrtransaccion/index/format/json?',
        ]
    ]
];
