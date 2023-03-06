<!DOCTYPE html>
<html lang="en">
    @include('_partials.head')
    <body>
        <div class="container-fluid">

            @include('_partials.menu')

            <main class="page-content">
                @yield('content')
            </main>
        </div>
    </body>
</html>
