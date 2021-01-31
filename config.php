<?php

return [
    'production' => true,
    'build' => [
    	'destination' => 'docs'
    ],
    'baseUrl' => '',
    'website_title' => 'Thomas de Luca',
    'description' => 'Website of Thomas de Luca',
    'collections' => [
    	'projects' => [
    		'path' => 'portfolio/{-filename}',
    		'sort' => ['-weight']
    	]
    ],
];
