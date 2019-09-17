<?php

return [
    'pagofacil' => [
        'url' => 'https://sandbox.pagofacil.tech',
        'options' => [
            'usuario' => env('IDUSER'),
            'sucursal' => env('IDSUCURSAL'),
            'url' => '/Wsrtransaccion/index/format/json?',
        ]
    ]
];
