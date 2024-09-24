<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lateef:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet"> --}}
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'cairo';
            /* src: url('{{ public_path('fonts/static/Cairo-light.ttf') }}') ; */
            src: url('{{ asset('fonts/cairo/Lateef-Bold.woff') }}') format('woff');

        }

        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
            font-family: 'DejaVu Sans', sans-serif;


        }



        html {
            margin: 0px
        }

        .imgg {
            position: relative;
            margin: auto;
            cursor: zoom-in;
            background-color: hsl(0, 0%, 90%);
            transition: background-color 300ms;
            width: 141vh;
            height: 100vh;
        }

        img {


            position: absolute;
            width: 100%;
            height: 100%;

        }

        h1 {
            position: absolute;
            color: rgb(0, 0, 0);
            top: 28%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 4vh;
            font-family: "cairo", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            white-space: nowrap;
            font-weight: 100;
            letter-spacing: 1.3px;
            direction: rtl;
            text-align: right;


        }

        .name {
            position: absolute;
            color: rgb(21 125 112);
            top: 33%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 5vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            direction: rtl;
            text-align: right;
        }

        .name1 {
            position: absolute;
            color: rgb(0, 0, 0);
            top: 40%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 5vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            letter-spacing: 1.3px;
            direction: rtl;
            text-align: right;
        }

        .name2 {
            position: absolute;
            color: rgb(0, 0, 0);
            top: 44%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 5vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            letter-spacing: 1.3px;
            direction: rtl;
            text-align: right;
        }

        .name3 {
            position: absolute;
            color: rgb(0, 0, 0);
            top: 48%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 5vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            letter-spacing: 1.3px;
            direction: rtl;
            text-align: right;
        }

        .name4 {
            position: absolute;
            color: rgb(21 125 112);
            top: 65%;
            left: 69%;
            transform: translateX(-50%);
            font-size: 4vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
            white-space: nowrap;
            direction: rtl;
            text-align: right;
        }

        .name5 {
            position: absolute;
            color: rgb(21 125 112);
            top: 65%;
            left: 31%;
            transform: translateX(-50%);
            font-size: 4vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
            white-space: nowrap;
            direction: rtl;
            text-align: right;
        }

        .name44 {
            position: absolute;
            color: black;
            top: 71%;
            left: 69%;
            transform: translateX(-50%);
            font-size: 4vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            direction: rtl;
            text-align: right;
        }

        .name55 {
            position: absolute;
            color: black;
            top: 71%;
            left: 31%;
            transform: translateX(-50%);
            font-size: 4vh;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            direction: rtl;
            text-align: right;
        }
    </style>
</head>

<body style="background-color: rgb(0, 0, 0); margin:0px ">

    <div class="imgg">

        @if (isset($image))
            <slot><img src="{{ $image }}" alt="شهاده شكر"></slot>
        @else
            <slot><img src="{{ asset('cert.png') }}" alt="شهاده شكر"></slot>
        @endif




        <h1> تتقدم إدارة مدرسة .. بالشكر والتقدير لـ</h1>
        <p class="name">الطالب / خالد بن يحيى أحمد</p>
        <p class="name1">وذلك نظير جهوده في تفعيل أنشطة اليوم العالمي للغة العربية ًًًً ه</p>
        <p class="name2">وبدورنا نقدم له هذا الشكر كتقدير لجهوده المبذولة</p>
        <p class="name3">سائلين الله له التوفيق والسداد</p>
        <p class="name4">معلم المادة</p>
        <p class="name44">فلان الفلاني</p>
        <p class="name5">مدير المدرسه</p>
        <p class="name55">فلان الفلاني</p>






    </div>

</body>

</html>
