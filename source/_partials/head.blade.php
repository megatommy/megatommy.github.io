<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $page->description }}">
    
    <meta property="og:title" content="{{ $page->title }} | {{ $page->website_title }}" />
    <meta property="og:description" content="{{ $page->description }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Thomas de Luca"/>
    <meta property="og:url" content="{{$page->website_url}}{{$page->getUrl()}}" />
    <meta property="og:image" content="{{$page->website_url}}{{$page->image}}" />
	
    <title>{{ $page->title }} | {{ $page->website_title }}</title>
	
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Albert+Sans" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
    <link href="/assets/css/bootstrap-grid.min.css" rel="stylesheet"/>
    <link href="/assets/css/bootstrap-utilities.min.css" rel="stylesheet"/>
    <link href="/assets/css/style.css" rel="stylesheet"/>
</head>
