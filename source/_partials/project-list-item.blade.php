<div class="col-sm-4">
    <div class="showcase-item">
        <a href="{{ $project->getUrl() }}">
            <div class="showcase-img rounded img-border"><img src="{{ $project->image }}" alt="{{ $project->image_alt }}" @if(isset($lazyload) && $lazyload)loading="lazy" @endif /></div>
            <div class="showcase-name">{{ $project->title }}</div>
        </a>
    </div>
</div>