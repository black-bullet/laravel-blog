<?php

return [
    'title'=>'Users',
    'single'=>'user',
    'model'=>'App\Models\User',
    'global_rows_per_page' => 20,
    'columns'=>[
        'id',
        'name',
        'email'
    ],
    'edit_fields'=>[
        'name'=>[
            'type'=>'text'
        ],
        'email'=>[
            'type'=>'text'
        ]
    ]
];