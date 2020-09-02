<!DOCTYPE html>
<html lang="fr">
        @include('partials.head')
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('partials.header')
            @include('partials.aside')

                @yield('content')

            @include('partials.footer')
        </div>
        @include('partials.foot')
    </body>
</html>
