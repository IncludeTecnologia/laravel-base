<!doctype html>
<html lang="en">
@include('layouts/head')
<body>

<div class="wrapper">

    @include('layouts/menu')

    <div class="main-panel">
        @include('layouts/side-bar')


        <div class="content">
            @yield('content')
        </div>


        @include('layouts/footer')

    </div>
</div>



@include('layouts/script')
@yield('script')
</body>
</html>
