<!DOCTYPE html>
<html lang="fr">

@include('layout.head')

    <body>
        <div id="fh5co-page">

            @include('layout.header')

            @yield('content')

            @include('layout.footer')

        </div>

        @include('layout.import_js')

    </body>
</html>