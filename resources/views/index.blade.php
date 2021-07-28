<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Sumaylo Optical and Dental Clinic</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('dist/css/noscript.css') }}" />
    </noscript>
    <style>
        .services {
            margin: auto auto;
        }

        @media (max-width: 600px) {

            .iframe,
            #intro a {
                display: none;
            }

        }

        .iframe {
            border: 2px solid black;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -o-border-radius: 50%;
            position: relative;
            overflow: hidden;
            width: 500px;
            height: 500px;
            margin: auto auto;
        }

        .iframe iframe {
            width: 100%;
            height: 100%;
        }

        .sodc_container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sodc_container .post {
            width: 250px;
            height: 400px;
            display: flex;
            overflow: hidden;
            flex-direction: column;
            position: relative;
            margin-right: 5px;
        }

        .sodc_container .post:hover .header_post {
            margin-top: -20px;
        }

        .sodc_container .post:hover .body_post {
            height: 50%;
        }

        .sodc_container .post:hover img {
            transform: translatey(-10px) translatex(-5px) scale(1.05);
        }

        .sodc_container .post .header_post {
            width: 100%;
            height: 40%;
            background: #ddd;
            position: absolute;
            top: 0;
            -webkit-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -moz-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -ms-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -o-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        }

        .sodc_container .post .header_post img {
            max-width: 100%;
            height: auto;
            transition: ease-in-out 600ms;
        }

        .sodc_container .post .body_post {
            width: 100%;
            height: 60%;
            background: #fff;
            position: absolute;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            -webkit-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -moz-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -ms-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -o-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            cursor: pointer;
        }

        .sodc_container .post .body_post .post_content {
            width: 80%;
            height: 80%;
            background: #fff;
            position: relative;
        }

        .sodc_container .post .body_post .post_content h1 {
            font-size: 20px;
            font-weight: bold;
        }

        .sodc_container .post .body_post .post_content p {
            font-size: 14px;
            font-weight: normal;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos {
            width: 100%;
            display: flex;
            background-color: #ffffff;
            justify-content: space-between;
            position: absolute;
            bottom: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.2);
            padding-top: 25px;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .postedBy {
            display: flex;
            flex-direction: column;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 12px;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .postedBy span {
            font-size: 12px;
            text-transform: uppercase;
            opacity: 0.5;
            letter-spacing: 1px;
            font-weight: bold;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .sodc_container_tags {
            display: flex;
            flex-direction: column;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .sodc_container_tags span {
            font-size: 12px;
            text-transform: uppercase;
            opacity: 0.5;
            letter-spacing: 1px;
            font-weight: bold;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .sodc_container_tags .tags ul {
            display: flex;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .sodc_container_tags .tags ul li {
            font-size: 12px;
            letter-spacing: 2px;
            list-style: none;
            margin-left: 8px;
            text-transform: uppercase;
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            cursor: pointer;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .sodc_container_tags .tags ul li:first-child {
            margin-left: 0px;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .sodc_container_tags .tags ul li:before {
            content: "";
            text-align: center;
            width: 100%;
            height: 5px;
            background: #FC6042;
            opacity: 0.5;
            position: absolute;
            bottom: 0;
            z-index: -1;
            padding: 0px 1px;
            -webkit-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -moz-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -ms-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            -o-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
            transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        }

        .sodc_container .post .body_post .post_content .sodc_container_infos .sodc_container_tags .tags ul li:hover:before {
            height: 18px;
        }

        @keyframes top {
            0% {
                opacity: 0;
                bottom: -80px;
            }

            100% {
                opacity: 1;
                bottom: 0px;
            }
        }

        @keyframes icon {
            0% {
                opacity: 0;
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: scale(1.3) rotate(-2deg);
            }

            100% {
                opacity: 1;
                bottom: 0px;
            }
        }
    </style>
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <h1>Sumaylo Optical and Dental Clinic</h1>
        <nav>
            <ul>
                <li><a href="#intro">Location</a></li>
                <li><a href="#one">Eye Care</a></li>
                <li><a href="#two">Dental Solution</a></li>
                <li><a href="#work">Services</a></li>
                <li><a href="{{ route('patients.login') }}">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <iframe style="position: absolute;top: 0px;left: 0px;width: 100vw;height: 92.5vh;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15800.183595471302!2d123.4851469!3d8.096802!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x40d3ff340449a0be!2sSumaylo%20Optical%20and%20Dental%20Clinic!5e0!3m2!1sen!2sph!4v1627345845739!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1627302713936!6m8!1m7!1s05vYnXVJa9L6LQvSyJ0lxg!2m2!1d8.096712563051819!2d123.485242143563!3f310.98193!4f0!5f0.7820865974627469" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br />
        <div class="content">
            <p></p>
            <footer>
                <a href="#one" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style2 right dark fullscreen">
        <div class="content box style2">
            <header>
                <h2>Eye Care</h2>
            </header>
            <p>Here at <strong>Sumaylo Optical and Dental Clinic</strong>, we are dedicated to help you see the bigger picture by providing you with the best quality in Eye treatment.</p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
    </section>

    <!-- Two -->
    <section id="two" class="main style2 left dark fullscreen">
        <div class="content box style2">
            <header>
                <h2>Dental Solution</h2>
            </header>
            <p>.</p>
        </div>
        <a href="#work" class="button style2 down anchored">Next</a>
    </section>

    <!-- Work -->
    <section id="work" class="main style3 primary">
        <div class="content">
            <header>
                <h2>Dental Services</h2>
            </header>
            <!-- the part below should be reapetable -->
            <div class="sodc_container">
                @foreach($services as $service)
                <div class="post">
                    <div class="header_post">
                        <img src="{{ asset('dist/images/two.jpg') }}" alt="">
                    </div>

                    <div class="body_post">
                        <div class="post_content">

                            <h1 style="text-transform:capitalize;">{{ $service->name }}</h1>
                            <p>Approximated Time: {{ $service->duration }}</p>

                            <div class="sodc_container_infos">
                                <div class="postedBy">
                                    <span>Price: ₱{{ $service->amount }}</span>
                                </div>

                                <div class="sodc_container_tags">
                                    <span></span>
                                    <div class="tags">
                                        <ul>
                                            <li><a href="{{ route('patients.login') }}" class="btn btn-primary">Set a Schedule</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--  -->
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">

        <!-- Icons -->
        <ul class="icons">
            <li><a href="https://www.facebook.com/pages/category/Medical-Center/Sumaylo-Vision-Care-Clinic-2223715751194359" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        </ul>

        <!-- Menu -->
        <ul class="menu">
            <li>&copy; Untitled</li>
            <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
        </ul>

    </footer>

    <!-- Scripts -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.poptrox.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('dist/js/browser.min.js') }}"></script>
    <script src="{{ asset('dist/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('dist/js/util.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>

</body>

</html>