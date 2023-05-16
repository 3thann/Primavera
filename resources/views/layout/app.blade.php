<!DOCTYPE html>
<html lang="fr">

@include('layout.head')

    <body>
        <div id="fh5co-page">

            @yield('content')

            @include('layout.footer')

        </div>

        @include('layout.import_js')

    </body>
</html>