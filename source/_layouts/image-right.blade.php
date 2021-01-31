@extends('_layouts.default')

@section('content')
<div class="row">
    <div class="col-sm-4 col-sm-push-8">
        <img src="{{ $page->image }}" class="showcase-img" />
    </div>
    <div class="col-sm-8 col-sm-pull-4">
        @yield('projectContent')
    </div>
</div>
@endsection