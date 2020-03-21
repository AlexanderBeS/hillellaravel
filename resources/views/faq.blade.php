<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FAQ</title>

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
        <a href="/contacts"><b>Contacts</b></a>
        <a href="/faq" class="selected">FAQ</a>
        <a href="/blog">Blog</a>
        <a href="/quotes">Quotes</a>
    </div>

    <div class="content">
        <div class="title m-b-md">
            FAQ
        </div>
        <h1> This is a FAQ page </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum turpis elementum, malesuada elit quis, venenatis diam. Aliquam gravida velit mattis turpis euismod, egestas commodo tortor lobortis. Nullam nisl sapien, commodo et odio a, congue tempor magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis feugiat ullamcorper pellentesque. Donec condimentum massa ac elit hendrerit, vel mattis massa luctus. Integer ac metus diam. Aenean nec posuere sem, in pulvinar lacus. Morbi urna nibh, commodo et hendrerit ut, ultricies et eros.

            Sed commodo dictum lectus, vitae faucibus odio vestibulum sed. Ut urna elit, pharetra in tempus eget, bibendum ut nunc. Ut eu ullamcorper odio, sit amet egestas libero. Morbi bibendum tincidunt nisi, ac feugiat est interdum non. Vestibulum odio nulla, iaculis vitae tincidunt at, iaculis a eros. Etiam elit odio, posuere id venenatis sed, aliquam eu orci. Donec non consequat lorem. Maecenas sed vehicula dui, ut sodales eros. Fusce accumsan nunc ligula, et ornare turpis fringilla et.

            Sed pellentesque dapibus orci, in mattis sapien pulvinar vel. Praesent hendrerit, tellus sed rhoncus euismod, diam ante volutpat urna, ullamcorper mollis enim libero at turpis. Quisque in varius nisl. Pellentesque malesuada aliquet enim nec tempus. Etiam porta eros sed fermentum rutrum. Mauris vitae nisl eu eros placerat tincidunt nec in enim. Nulla at egestas tortor. Suspendisse non nulla a ipsum commodo maximus ac ut enim.

            Nunc cursus at mi non aliquam. Nullam dignissim nunc libero, vel congue elit fringilla id. Pellentesque vitae est vel orci tristique pharetra porttitor ac sapien. Cras hendrerit, odio in sollicitudin interdum, dolor neque efficitur tortor, ac dictum velit mauris ut diam. Mauris eu odio vel lorem varius interdum. Sed mi lectus, lobortis eget euismod vel, tempus vitae nibh. Suspendisse mauris mauris, efficitur at accumsan eu, scelerisque rutrum arcu. Pellentesque nec magna sed metus viverra dignissim. Pellentesque elementum, dolor vitae tincidunt vulputate, urna dui tincidunt libero, et sodales velit diam nec eros. Quisque ac congue diam. Sed imperdiet turpis ut vulputate pretium. Curabitur et dictum purus. In sodales semper diam, eget condimentum enim.

            Suspendisse sem ipsum, faucibus porta lectus ultrices, congue efficitur magna. Sed non magna eu libero ultricies maximus a vitae odio. Ut et dolor vitae velit bibendum consequat. Nullam eget enim id erat auctor dictum. Donec rhoncus neque neque, non volutpat purus eleifend non. Mauris eget ipsum quam. Integer ligula massa, fermentum vel risus ut, mattis varius nibh.
        </p>
    </div>
</body>
</html>
