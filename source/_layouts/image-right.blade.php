@extends('_layouts.default')

@section('content')
<h1>{{ $page->title }}</h1>
@if($page->subtitle)<h2 class="fs-5">{{ $page->subtitle }}</h2>@endif
        <div class="text-center my-4">
            <img class="rounded img-border" src="{{ $page->image }}" />
        </div>
        @yield('projectContent')
@endsection