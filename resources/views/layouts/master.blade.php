<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Project 3')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <link href='//netdna.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

</head>
<body>
    <nav id="main-menu">
    <h3><strong>Navigation</strong></h3>
    <ul>
        <li><a href="/">Home</a></li>
        @yield('nav')
    </ul>
    </nav>
    <section>
        <div class="container">
            {{-- Main page content will be yielded here --}}
            @yield('content')
            @yield('form')
            @yield ('formcontent')
        </div>
    </section>
</body>
</html>