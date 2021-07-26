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
        <div class="content">
            <div class="iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1627302713936!6m8!1m7!1s05vYnXVJa9L6LQvSyJ0lxg!2m2!1d8.096712563051819!2d123.485242143563!3f310.98193!4f0!5f0.7820865974627469" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <br />
            <p>Rizal Avenue, Molave, Zamboanga del Sur, 7023, Molave.</p>
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

            <!-- Gallery  -->
            <div class="gallery">
                <article class="from-left">
                    <div class="card services" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>
                <article class="from-right">
                    <div class="card services" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>
                <article class="from-left">
                    <div class="card services" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>
                <article class="from-right">
                    <div class="card services" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>
                <article class="from-left">
                    <div class="card services" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>
                <article class="from-right">
                    <div class="card services" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </article>
            </div>

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