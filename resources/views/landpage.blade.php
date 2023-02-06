<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>land page </title>
    @vite('resources/css/app.css')
    <style>
        #banner {
            background-image: url("img/background.png");
            height: 100vh;
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */
            position: relative;
        }

        nav {
            position: fixed;
            z-index: 5;
        }

        .logo {
            width: 94px;
            height: 99px;
        }

        #overlay {
            position: absolute; /* Sit on top of the page content */
            width: 100%; /* Full width (cover the whole page) */
            height: 100%; /* Full height (cover the whole page) */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.3); /* Black background with opacity */
            z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
            cursor: pointer; /* Add a pointer on hover */
        }


        .img-banner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 250px;
        }


        /**************************************************************************************************************/
        .aboutus .text {
            padding-right: 150px;
        }

        /**************************************************************************************************************/
        .goals .img{
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
{{--<video autoplay muted loop id="myVideo">--}}
{{--    <source src="rain.mp4" type="video/mp4">--}}
{{--</video>--}}
<header id="banner">
    <nav class="px-24 py-2 w-full">
        <div class="flex justify-between items-center">
            <div class="w-1/4">
                <img src="img/logo.png" class="logo">
            </div>


            <ul class="flex flex-row-reverse w-3/4 text-white">
                <li class="mx-5">Homepage</li>
                <li class="mx-5">About Us</li>
                <li class="mx-5">Projects</li>
                <li class="mx-5">Contact Us</li>

            </ul>
        </div>
    </nav>
    <img class="img-banner" src="img/logowithouttext.png">
    <div id="overlay"></div>

    <div class="socila h-full w-full">


    </div>
</header>
<div class="aboutus py-10 ">
    <div class="lg:container mx-auto grid grid-cols-2 " style="width: 1024px">
        <div class="text ">
            <h1 class="font-bold mb-5">About Ladun Investments</h1>
            <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout.
                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                to using 'Content here, content here', making it look like readable English.
                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                and a search for 'lorem ipsum'
            </p>
        </div>
        <div class="img">
            <img src="">
        </div>
    </div>
</div>


<div class="goals mx-auto" style="width: 1024px">
    <div class="container grid grid-cols-3 gap-4 bg-gray-200 p-20">
        <div class="rounded-lg p-2 bg-white">
            <div class="rounded-lg p-10 border-orange-500 border-2 flex flex-col items-center ">
                <div class="w-full flex justify-center">
                    <div class="img rounded-full bg-gray-400 ">
                        <img src="">
                    </div>
                </div>

                <h4 class="font-bold mt-2 mb-5">
                    vision
                </h4>

                <hr class="bg-gray-300 mb-2" style="width: 230px;height: 2px;">
                <p class="text-zinc-300	" style="color: #898787;font-size: 14px">
                    It is a long established fact that a reader
                </p>
            </div>
        </div>
        <div class="rounded-lg p-2 bg-white">
            <div class="rounded-lg p-10 border-orange-500 border-2 flex flex-col items-center ">
                <div class="w-full flex justify-center">
                    <div class="img rounded-full bg-gray-400 ">
                        <img src="">
                    </div>
                </div>

                <h4 class="font-bold mt-2 mb-5">
                    vision
                </h4>

                <hr class="bg-gray-300 mb-2" style="width: 230px;height: 2px;">
                <p class="text-zinc-300	" style="color: #898787;font-size: 14px">
                    It is a long established fact that a reader
                </p>
            </div>
        </div>
        <div class="rounded-lg p-2 bg-white">
            <div class="rounded-lg p-10 border-orange-500 border-2 flex flex-col items-center ">
                <div class="w-full flex justify-center">
                    <div class="img rounded-full bg-gray-400 ">
                        <img src="">
                    </div>
                </div>

                <h4 class="font-bold mt-2 mb-5">
                    vision
                </h4>

                <hr class="bg-gray-300 mb-2" style="width: 230px;height: 2px;">
                <p class="text-zinc-300	" style="color: #898787;font-size: 14px">
                    It is a long established fact that a reader
                </p>
            </div>
        </div>
    </div>
</div>


</body>
</html>
