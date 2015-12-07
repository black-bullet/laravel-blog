<?php

return [
    'title'=>'Comments',
    'single'=>'comment',
    'model'=>'App\Models\Comment',
    'global_rows_per_page' => 20,
    'columns'=>[
        'id',
        'name',
        'comment',
        'published',
        'post_id' => [
            'title' => 'Post',
            'relationship' => 'post',
            'select' => '(:table).title',
        ]
    ],
    'edit_fields'=>[
        'name'=>[
            'type'=>'text'
        ],
        'comment'=>[
            'type'=>'textarea'
        ],
        'published'=>[
            'type'=>'bool'
        ],
        'post' => [
            'title' => 'post',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
    ]
];