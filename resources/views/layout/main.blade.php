<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '爱斗图')</title>
    <link rel="stylesheet" href="/css/appbuilder.css" />
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
@include("layout._header")
<div class="section w1200 center mt20">
@yield("body")
</div>
@include("layout._footer")
</body>
</html>