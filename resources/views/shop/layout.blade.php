<!DOCTYPE html>
<html lang="en">
   @include('shop.shared.head')
    <body>
        <!-- Navigation-->
        @include('shop.shared.nav')
        <!-- Header-->
        @include('shop.shared.header')
        <!-- Section-->
        <main>
            @yield('content')
        </main>

        <!-- Footer-->
        @include('shop.shared.foot')
        @include('shop.shared.scripts')
    </body>
</html>
