<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="4tWyPU7jVmDZIz0kyjj8c7E8_a-bL_VX1uCS6U0LPLU" />
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

    <!-- Matomo -->
    <script>
      /* I just track your visit to this page. I don't track you using a cookies or anything else! I just care how many people visited which pages, that's all! I also made sure to follow al these steps: https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-without-consent-or-cookie-banner/ */

      var _paq = window._paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      @if($page->getFilename() == '404')
        _paq.push(['setDocumentTitle',  '404/URL = ' +  encodeURIComponent(document.location.pathname+document.location.search) + '/From = ' + encodeURIComponent(document.referrer)]);
      @endif
      _paq.push(["disableCookies"]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//stats.thomasdeluca.nl/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//stats.thomasdeluca.nl/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Matomo Code -->
</head>
