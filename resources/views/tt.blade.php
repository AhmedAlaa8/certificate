<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Vibes&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <style>
        p {
            margin: auto;
            font-size: 20px;
            font-weight: 400;
            color: #c2e6e2;
            font-family: "Handjet", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
                "ELGR" 1,
                "ELSH" 2;
        }

        html,
        body {

            margin: 0;
        }

        .bg {
            position: absolute;
            z-index: -1;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;

            background-image: radial-gradient(circle at 30% 86%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 8%, transparent 8%, transparent 92%), radial-gradient(circle at 55% 100%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 8%, transparent 8%, transparent 92%), radial-gradient(circle at 40% 75%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 6%, transparent 6%, transparent 94%), radial-gradient(circle at 7% 99%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 6%, transparent 6%, transparent 94%), radial-gradient(circle at 69% 76%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 6%, transparent 6%, transparent 94%), radial-gradient(circle at 2% 35%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 6%, transparent 6%, transparent 94%), radial-gradient(circle at 14% 48%, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.03) 6%, transparent 6%, transparent 94%), radial-gradient(circle at 28% 87%, rgba(255, 255, 255, 0.04) 0%, rgba(255, 255, 255, 0.04) 4%, transparent 4%, transparent 96%), radial-gradient(circle at 65% 14%, rgba(255, 255, 255, 0.04) 0%, rgba(255, 255, 255, 0.04) 4%, transparent 4%, transparent 96%), radial-gradient(circle at 51% 36%, rgba(255, 255, 255, 0.04) 0%, rgba(255, 255, 255, 0.04) 4%, transparent 4%, transparent 96%), radial-gradient(circle at 6% 93%, rgba(255, 255, 255, 0.04) 0%, rgba(255, 255, 255, 0.04) 4%, transparent 4%, transparent 96%), linear-gradient(135deg, rgb(23, 83, 233), #157d70);
        }

        body {

            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;

            background-color: #f5f5f5;
        }


        .form-signin {

            display: flex;
            flex-direction: column;
            align-items: center
        }

        h1 {

            margin-top: 0px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-family: "Vibes", system-ui;
            font-weight: 400 !important;
            font-style: normal;
            font-size: 68px !important;
        }


        .dd {
            font-family: "Handjet", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
                "ELGR" 1,
                "ELSH" 2;
        }

        .form-con {
            margin: 10px;
            width: 96%;
            padding: 7px;
            border-radius: 12px;
            border: none;
            border-bottom: 2px solid #157d70
        }

        .form-con:focus {
            border-color: #157d70 !important;

        }

        .copyright {
            text-align: center;
            color: rgba(255, 255, 255, 0.65);
        }

        .form-control {
            background: rgba(255, 255, 255, 0.9);
        }

        .modal-header {

            padding: 0rem 1rem !important;

        }
    </style>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <div class="bg">


    </div>


    <div class="con">

        <main class="form-signin">

            <h1 class="h3"> هيفاء ناصر </h1>
            <p> شهادة شكر عامة قابلة لتعديل الاسماء والالقاب</p>
            <button type="button" class="btn btn-outline-light dd" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                لصناعه شهاده اضغط هنا
            </button>


            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('store') }}" method="post">
                                @csrf




                                <div class="uk-margin">
                                    <input class="form-con" type="text" name="name1"
                                        value='تتقدم إدارة مدرسة .. بالشكر والتقدير لـ'>
                                </div>


                                <div class="uk-margin">
                                    <input class="form-con" type="text" name="name2"
                                        value='الطالب / خالد بن يحيى أحمد'>
                                </div>

                                <div class="uk-margin">
                                    <input class="form-con" type="text" name="name3"
                                        value='وذلك نظير جهوده في تفعيل أنشطة اليوم العالمي للغة العربية ١٤٤٥ هـ'>
                                </div>

                                <div class="uk-margin">
                                    <input class="form-con" type="text" name="name4"
                                        value='وبدورنا نقدم له هذا الشكر كتقدير لجهوده المبذولة'>
                                </div>

                                <div class="uk-margin">
                                    <input class="form-con" type="text" name="name5"
                                        value='سائلين الله له التوفيق والسداد'>
                                </div>

                                <div class="uk-margin">
                                    <input class="form-con" type="text" name="name8" placeholder="سطر اختياري">
                                </div>



                                <input class="form-con" type="text" name="name9" value='معلم المادة'>



                                <input class="form-con" type="text" name="name6" value='فلان الفلاني'>


                                <div class="uk-margin">

                                    <input class="form-con" type="text" name="name10" value='مدير المدرسة'>
                                    <input class="form-con" type="text" name="name7" value='فلان الفلاني'>



                                    <div class="uk-margin">

                                    </div>

                                    <hr>
                                    <div class="uk-margin" style="margin: 11px;">
                                        <button type="submit" name="submit" class="btn btn-outline-success">
                                            عرض الشهادة <i class="fa fa-print"></i></button>

                                        <button type="submit" name="submit1" value="55"
                                            class="btn btn-outline-primary">
                                            تحميل الشهادة <i class="fa fa-print"></i></button>

                                    </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </main>
    </div>
</body>

</html>
