@extends('_layouts.default')

@section('content')

@yield('portfolioContent')

<h2 class="mt-5 mb-3">Work related</h2>
<div class="row g-5">
    @foreach($projects as $project)
        @if($project->display == 'work')
            @include('_partials.project-single')
        @endif
    @endforeach
</div>

<h2 class="mt-5 mb-3">Experiments</h2>
<div class="row g-5">
	@foreach($projects as $project)
        @if($project->display == 'experiment')
            @include('_partials.project-single')
        @endif
    @endforeach
</div>

<h2 class="mt-5 mb-3">School assignments</h2>
<div class="row g-5">
	@foreach($projects as $project)
        @if($project->display == 'school')
            @include('_partials.project-single')
        @endif
    @endforeach
</div>
@endsection