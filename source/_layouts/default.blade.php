<!DOCTYPE html>
<html lang="en">
    @include('_partials.head')
    <body>
        <div class="container-fluid">

            @include('_partials.menu')

            <!-- <div class="row"> -->
                <!-- <div class="col-sm-12"> -->
                    <div class="page-content px-3">
                        @yield('content')
                    </div>
                <!-- </div> -->

            <!-- </div> -->
        </div>
    </body>
</html>
