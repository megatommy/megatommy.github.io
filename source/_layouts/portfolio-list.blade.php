@extends('_layouts.default')

@section('content')

@yield('portfolioContent')

<h2 class="project-header">Work related</h2>
<div class="row">
	@include('_partials.projects-forloop', ['display' => 'work'])
</div>

<h2 class="project-header">Experiments</h2>
<div class="row">
	@include('_partials.projects-forloop', ['display' => 'experiment'])
</div>

<h2 class="project-header">School assignments</h2>
<div class="row">
	@include('_partials.projects-forloop', ['display' => 'school'])
</div>
@endsection