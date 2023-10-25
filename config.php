<?php

return [
    'production' => true,
    'build' => [
    	'destination' => 'docs'
    ],
    'baseUrl' => '',
    'website_title' => 'Thomas de Luca',
    'description' => 'Website of Thomas de Luca',
    'website_url' => 'https://thomasdeluca.nl',
    'image' => '/assets/img/thomas-de-luca.png',
    'projects_url' => 'https://projects.thomasdeluca.nl',
    'collections' => [
    	'projects' => [
    		'path' => 'portfolio/{-filename}',
    		'sort' => ['-weight'],
            // 'sort' => ['title'],
            'filter' => function($item){
                return $item->categories == 'projects';
            }
    	]
    ],
];
