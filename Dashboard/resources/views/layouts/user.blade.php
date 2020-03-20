@include('includes.head')
    <div class="d-flex position-relative" style="overflow-x: hidden;">
        @include('includes.auth.user.aside')
        <div class="flex-fill content">
            @include('includes.auth.user.header')

            @yield('content')
        </div>
        @include('includes.auth.user.footer')
    </div>
@include('includes.foot')
