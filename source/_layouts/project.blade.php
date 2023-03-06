@extends('_layouts.default')

@section('content')

<h1>{{ $page->title }}</h1>
@if($page->subtitle)<h2 class="fs-6 fw-normal fst-italic">{{ $page->subtitle }}</h2>@endif
<div class="text-center my-4">
    <img class="rounded img-border" src="{{ $page->image }}" alt="{{ $page->image_alt }}" />
</div>
@yield('projectContent')

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "SoftwareApplication",
    "name": "{{ $page->title }}",
    "keywords": "{{ $page->keywords }}",
    "url": "{{ $page->website_url }}{{ $page->getUrl() }}",
    "image": "{{ $page->website_url }}{{ $page->image }}",
    "description": "{{ $page->description }}",
    "creator": {
        "@type": "Person",
        "name": "Thomas de Luca",
        "url": "{{ $page->website_url }}"
    }
}
</script>
@endsection