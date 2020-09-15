<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>

<div style="border: 1px solid darkseagreen;">
    @section('sidebar')
        This is the master sidebar.
    @show
</div>

<div class="container" style="border:1px solid red;">
    @yield('content')
</div>
</body>
</html>
