---
extends: _layouts.default
title: Portfolio
description: "Here you can find projects I made which have solved problems. They are categorized by type: work related, experiments or school assignments"
---

# Portfolio

Here are some projects worked on since I started being interested in computers and webdevelopment.

<h2 class="mt-5 mb-3">Work related</h2>
<div class="row gy-5 gx-md-5">
    @foreach($projects as $project)
        @if($project->display == 'work')
            @include('_partials.project-list-item')
        @endif
    @endforeach
</div>

<h2 class="mt-5 mb-3">Experiments</h2>
<div class="row gy-5 gx-md-5">
	@foreach($projects as $project)
        @if($project->display == 'experiment')
            @include('_partials.project-list-item', ['lazyload' => true])
        @endif
    @endforeach
</div>

<h2 class="mt-5 mb-3">School assignments</h2>
<div class="row gy-5 gx-md-5">
	@foreach($projects as $project)
        @if($project->display == 'school')
            @include('_partials.project-list-item', ['lazyload' => true])
        @endif
    @endforeach
</div>