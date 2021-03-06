@include('includes.head')

<div class="d-flex min-vh-100">
    @include('includes.auth.admin.aside')
    <div class="flex-fill">
        @include('includes.auth.header')
        <div class="d-flex flex-column justify-content-between" style="min-height: calc(100vh - 92px);">
            <main class="bg-white flex-fill">
                @yield('content')
            </main>
            @include('includes.auth.footer')
        </div>
    </div>
</div>

@include('includes.foot')
