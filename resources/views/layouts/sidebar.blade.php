<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<header>
    @include('includes.header')
</header>
<container>
    <div class="container">
        <div id="main" class="row content">
            <!-- main content -->
            <div id="content" class="col-md-10">
                @yield('content')
            </div>
            <!-- sidebar content -->
            <div id="sidebar" class="col-md-2">
                @include('includes.sidebar')
            </div>
        </div>
    </div>
</container>
<footer>
    @include('includes.footer')
</footer>
</body>
</html>
