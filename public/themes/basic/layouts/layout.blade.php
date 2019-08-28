<!DOCTYPE html>
<html lang="en">

<head>
    {!! meta_init() !!}
    <meta name="keywords" content="@get('keywords')">
    <meta name="description" content="@get('description')">
    <meta name="author" content="@get('author')">

    <title>@get('title')</title>

    @styles()

</head>

<body>
@partial('header')
<main class="main-content">
    @content()
</main>

@partial('footer')

@scripts()
</body>

</html>
