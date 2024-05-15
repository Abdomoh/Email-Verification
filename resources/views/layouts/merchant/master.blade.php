<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('marchent-assets') }}//" data-template="vertical-menu-template-free">

<body>
    @include('layouts.merchant.head')
    @include('layouts.merchant.sidebar')
    @yield('content')
    @include('layouts.merchant.footer')
    @include('layouts.merchant.script')


</body>

</html>