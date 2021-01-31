@foreach($projects as $project)
	@if($project->display == $display)
	<div class="col-sm-6 col-md-3 showcase-item">
	    <div class="showcase">
	        <a href="{{ $project->getUrl() }}"><img src="{{ $project->image }}" class="showcase-img" /></a>
	        <div class="showcase-name"><a href="{{ $project->getUrl() }}">{{ $project->title }}</a></div>
	    </div>
	</div>
	@endif
@endforeach