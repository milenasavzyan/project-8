<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/color.css">


</head>
<body>

@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>

</body>
</html>

