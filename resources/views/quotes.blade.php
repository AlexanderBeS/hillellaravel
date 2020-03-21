<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QUOTE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .selected {
            font-size: 16px !important;
            color: #1a43d8 !important;
        }
    </style>
</head>
<body>
<div class="links">
    <a href="/">Main Page</a>
    <a href="/about">About</a>
    <a href="/contacts">Contacts</a>
    <a href="/faq">FAQ</a>
    <a href="/blog">Blog</a>
    <a href="/quotes" class="selected">Quotes</a>
</div>

<div class="content">
    <div class="title m-b-md">
        Quote
    </div>
    <h1> Мысли великих людей — от Сократа до Шварцнеггера — о жизненных ценностях, успехе и человеческих способностях</h1>
    <p>
        {{ $quote }}
    </p>
</div>
</body>
</html>
