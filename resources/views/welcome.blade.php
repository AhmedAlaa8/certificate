<!DOCTYPE html>
<html>

<head>
    <title>
        شهادة فارغة للكتابة
    </title>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit-rtl.css" />
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=Cairo:400,700,900&subset=arabic'); */
        /* POWERED www.Chakirdev.com */

        * {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            text-decoration: none;
            font-family: 'Cairo', sans-serif;
            text-rendering: optimizeLegibility;

        }

        html {
            background-image: url("../img/img2.jpg");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;

        }

        body {
            font-family: 'Cairo', sans-serif;
            text-rendering: optimizeLegibility;
            direction: rtl;
        }

        .clr {
            clear: both;
        }

        #HomePage {
            width: 95%;
            margin: auto;
            padding-top: 66px;
        }

        footer {
            width: 100%;
            padding-bottom: 20px;
        }

        .inpu {
            border: 1px solid hsl(171.97deg 95.15% 32.35%);
            border-radius: 35px;
            text-align: center;
            width: 400px;
        }

        .button {
            background-color: hsl(171.97deg 95.15% 32.35%);
            /* Green */
            border: none;
            border-radius: 30px;
            color: white;
            padding: 5px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 21px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            width: 170px;
        }

        .button:hover {
            background-color: #0ab28b;
            /* Green */
        }

        .aid-text {
            font-size: 20px;
            font-weight: bold;
            line-height: 30px;
            font-family: 'Cairo', sans-serif;
            width: 60%;
        }

        hsl(171.97deg 95.15% 32.35%) @media screen and (min-width: 200px) and (max-width: 1000px) {
            .aid-text {
                font-size: 18px;
                width: 90%;
            }

            #HomePage {
                width: 95%;
                margin: auto;
                padding-top: 0px;
                margin-top: 50px;
            }

            .inpu {
                border: 1px solid hsl(171.97deg 95.15% 32.35%);
                border-radius: 35px;
                text-align: center;
                width: 80%;
            }

            footer {
                width: 100%;
                font-size: 12px;
            }
        }
    </style>


</head>

<body>
    <center>

    </center>
    <div id="HomePage">

        <center>



            <a href="index.php"><img src="https://my-card.one/certs/AWLD/img/logo.png" style="width:150px;" /></a>
            <div class="clr"></div>
            <h2 class="aid-text">

                شهادة شكر عامة قابلة لتعديل الاسماء والالقاب
            </h2>


            <form action="{{ route('store') }}" method="post" style="font-family: 'Amiri', serif !important;">
                @csrf
                <fieldset class="uk-fieldset">

                    <!مربع النص الأول !>

                        <div class="uk-margin">
                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name1"
                                value='تتقدم إدارة مدرسة .. بالشكر والتقدير لـ'>
                        </div>


                        <div class="uk-margin">
                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name2"
                                value='الطالب / خالد بن يحيى أحمد'>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name3"
                                value='وذلك نظير جهوده في تفعيل أنشطة اليوم العالمي للغة العربية ١٤٤٥ هـ'>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name4"
                                value='وبدورنا نقدم له هذا الشكر كتقدير لجهوده المبذولة'>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name5"
                                value='سائلين الله له التوفيق والسداد'>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name8"
                                placeholder="سطر اختياري">
                        </div>



                        <input class="uk-input inpu" type="text"
                            style="border-radius:6px !important;font-size:17px !important" name="name9"
                            value='معلم المادة'>



                        <input class="uk-input inpu" type="text"
                            style="border-radius:6px !important;font-size:17px !important" name="name6"
                            value='فلان الفلاني'>


                        <div class="uk-margin">

                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name10"
                                value='مدير المدرسة'>
                            <input class="uk-input inpu" type="text"
                                style="border-radius:6px !important;font-size:17px !important" name="name7"
                                value='فلان الفلاني'>


                            <div class="uk-margin">
                                <button type="submit" name="submit" class="uk-button button"
                                    style="border-radius:6px !important;font-size:17px !important;padding:3px !important; width:200px !important; font-family: 'Amiri', serif !important; ">
                                    عرض الشهادة <i class="fa fa-print"></i></button>

                                <button type="submit" name="submit1" value="55" class="uk-button button"
                                    style="border-radius:6px !important;font-size:17px !important;padding:3px !important; width:200px !important; font-family: 'Amiri', serif !important; ">
                                    تحميل الشهادة <i class="fa fa-print"></i></button>





                            </div>
                            <div class="uk-margin">

                            </div>
                            <div class="uk-margin">
                                عدد البطاقات المطبوعة
                                0
                            </div>








                </fieldset>
            </form>
            <div class="clr"></div><br>


        </center>
    </div>

    </div>
</body>

</html>
