<!DOCTYPE html>
<html>
    @include('_partials.head')
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="title"><a href="/">{{ $page->website_title }}</a></h1>
                </div>

                @include('_partials.menu')

                <div class="col-xs-12">
                    <div class="page">
                        <h1 class="page-title">{{ $page->title }}</h1>
                        @if($page->subtitle)<h3 class="page-subtitle">{{ $page->subtitle }}</h3>@endif
                        <div class="page-content">
                            @yield('content')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
