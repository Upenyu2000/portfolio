<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Post - @yield('content')</title>
</head>
<body>
    <h1>Posted: @yield('title')</h1>

    <div>
        @yield('content')
    </div>
</body>
</html>
