@extends('_layouts.default')

@section('content')
<div class="row">
    <div class="col-sm-4 col-sm-push-8">
    	<div class="fadein">
	    	@foreach($page->images as $image)
	        	<img src="{{ $image }}" class="showcase-img @if($loop->index != 0)is-hidden @endif" />
	        @endforeach
        </div>
    	<img src="/assets/img/500.png" />
    </div>
    <div class="col-sm-8 col-sm-pull-4">
        @yield('homepageContent')
    </div>
</div>
@endsection