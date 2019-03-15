<?php
/**
 * Created by PhpStorm.
 * User: madelinegriep
 * Date: 3/15/19
 * Time: 8:50 AM
 */
<!doctype html>
<html>
<head>
@include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
