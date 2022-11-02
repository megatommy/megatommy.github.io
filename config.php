<?php

return [
    'production' => true,
    'build' => [
    	'destination' => 'docs'
    ],
    'baseUrl' => '',
    'website_title' => 'Thomas de Luca',
    'description' => 'Website of Thomas de Luca',
    'projects_url' => 'https://projects.thomasdeluca.nl',
    'collections' => [
    	'projects' => [
    		'path' => 'portfolio/{-filename}',
    		'sort' => ['-weight'],
            'filter' => function($item){
                return $item->categories == 'projects';
            }
    	]
    ],
];
