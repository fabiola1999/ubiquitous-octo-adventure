@include('includes.head')
    <div class="d-flex position-relative" style="overflow-x: hidden;">
        @include('includes.auth.admin.aside')
        <div class="flex-fill content">
            @include('includes.auth.admin.header')

            @yield('content')
        </div>
        @include('includes.auth.admin.footer')
    </div>
@include('includes.foot')