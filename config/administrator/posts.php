<?php

return [
    'title'=>'Posts',
    'single'=>'post',
    'model'=>'App\Models\Post',
    'global_rows_per_page' => 20,
    'columns'=>[
        'id',
        'title',
        'content',
        'author',
        'published',
    ],
    'edit_fields'=>[
        'title'=>[
            'type'=>'text'
        ],
        'content'=>[
            'type'=>'textarea'
        ],
        'author'=>[
            'type'=>'text'
        ],
        'published'=>[
            'type'=>'bool'
        ],
        'comments' => [
            'title' => 'Comment',
            'type' => 'relationship',
            'name_field' => 'comment',
            'constraints' => array('post' => 'comments')
        ],
    ]
];