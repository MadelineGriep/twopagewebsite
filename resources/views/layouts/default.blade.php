<!DOCTYPE html>
<html>
<head>
@include('includes.head')
</head>
<body>
<div class="cover-container d-flex w-100 p-3 mx-3 flex-column">
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

</div>
</body>
</html>
