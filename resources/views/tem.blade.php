<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        @font-face {
            /* font-family: 'cairo'; */
            /* src: url('{{ public_path('fonts/static/Cairo-light.ttf') }}') ; */
            /* src: url('{{ asset('fonts/cairo/Cairo-Regular.woff') }}') format('woff'); */

        }

        @page {

            margin: 0 !important;
            padding: 0 !important
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
            top: 27%;
            left: 50%;
            transform: translateX(-38%);
            font-size: 26px;
            font-family: "cairo", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            white-space: nowrap;
            font-weight: 500;
            /* letter-spacing: 1.3px; */
            max-width: 100%;
            direction: rtl;
            text-align: right;


        }

        .name {
            position: absolute;
            color: rgb(21 125 112);
            top: 35%;
            left: 50%;
            transform: translateX(-38%);
            font-size: 30px;
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
            top: 43%;
            left: 50%;
            transform: translateX(-38%);
            font-size: 22px;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            /* letter-spacing: 1.3px; */
            direction: rtl;
            text-align: right;
        }

        .name2 {
            position: absolute;
            color: rgb(0, 0, 0);
            top: 47%;
            left: 50%;
            transform: translateX(-38%);
            font-size: 22px;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            /* letter-spacing: 1.3px; */
            direction: rtl;
            text-align: right;
        }

        .name3 {
            position: absolute;
            color: rgb(0, 0, 0);
            top: 51%;
            left: 50%;
            transform: translateX(-38%);
            font-size: 22px;
            font-family: "DejaVu Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
            white-space: nowrap;
            letter-spacing: 1.3px;
            direction: rtl;
            text-align: right;
        }

        .name8 {
            position: absolute;
            color: rgb(0, 0, 0);
            top: 55%;
            left: 50%;
            transform: translateX(-38%);
            font-size: 22px;
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
            font-size: 25px;
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
            font-size: 25px;
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
            font-size: 25px;
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
            font-size: 25px;
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

        <div class="con">


            <h1> {{ $request->name1 }}</h1>
            <h2 class="name">{{ $request->name2 }}</h2>
            <p class="name1">{{ $request->name3 }}</p>
            <p class="name2">{{ $request->name4 }}</p>
            <p class="name3">{{ $request->name5 }}</p>
            <p class="name8">{{ $request->name8 }}</p>
            <p class="name4">{{ $request->name10 }}</p>
            <p class="name44">{{ $request->name6 }}</p>
            <p class="name5">{{ $request->name9 }}</p>
            <p class="name55">{{ $request->name7 }}</p>


        </div>



    </div>

</body>

</html>
