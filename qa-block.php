<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality Assurance Division</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>


<style>
    html,
    body {
        height: 100%;
    }

    body {
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
    }

    .cover-container {
        max-width: 42em;
    }

    .masthead {
        margin-bottom: 2rem;
    }

    .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
        margin-left: 1rem;
    }

    .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
    }

    .cover {
        padding: 0 1.5rem;
    }

    .cover .btn-lg {
        padding: .75rem 1.25rem;
        font-weight: 700;
    }

    .mastfoot {
        color: rgba(255, 255, 255, .5);
    }

    #page {
        visibility: hidden;
    }

    #reveal-effect {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    body.loaded {
        background-color: #5a7391;
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        background-image: url('img/bg/qa-bg.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-position: center;
        position: relative;
    }

    body.loaded #page {
        visibility: visible;
    }

    body.loaded #reveal-effect {
        opacity: 1;
    }

    body.loaded.revealed canvas {
        display: none;
    }

    .par {
        display: none;
    }

    body.loaded.revealed .par {
        display: block;
    }
</style>

<style>
    * {
        font-family: "Jost", sans-serif;
    }

    main {
        position: relative;
        width: calc(min(90rem, 90%));
        margin: 0 auto;
        min-height: 100vh;
        column-gap: 3rem;
    }

    .bg {
        position: fixed;
        top: -4rem;
        left: -12rem;
        z-index: -1;
        opacity: 0;
    }

    .bg2 {
        position: fixed;
        bottom: -2rem;
        right: -3rem;
        z-index: -1;
        width: 9.375rem;
        opacity: 0;
    }

    main>div span {
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-size: 1rem;
        color: #717171;
    }

    main>div h1 {
        text-transform: capitalize;
        letter-spacing: 0.8px;
        font-family: "Roboto", sans-serif;
        font-weight: 900;
        font-size: clamp(3.4375rem, 4rem, 4rem);
        background-color: #005baa;
        background-image: linear-gradient(45deg, #005baa, #000);
        background-size: 100%;
        background-repeat: repeat;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-background-clip: text;
        -moz-text-fill-color: transparent;
    }

    main>div hr {
        display: block;
        background: #005baa;
        height: 0.25rem;
        width: 6.25rem;
        border: none;
        margin: 1.125rem 0 1.875rem 0;
    }

    main>div p {
        line-height: 1.6;
    }

    main a {
        display: inline-block;
        text-decoration: none;
        text-transform: uppercase;
        color: #717171;
        font-weight: 500;
        background: #fff;
        border-radius: 3.125rem;
        transition: 0.3s ease-in-out;
    }

    main>div>a {
        border: 2px solid #c2c2c2;
        margin-top: 2.188rem;
        padding: 0.625rem 1.875rem;
    }

    main>div>a:hover {
        border: 0.125rem solid #005baa;
        color: #005baa;
    }

    .swiper {
        width: 100%;
        padding-top: 3.125rem;
    }

    .swiper-pagination-bullet,
    .swiper-pagination-bullet-active {
        background: #fff;
    }

    .swiper-pagination {
        bottom: 1.25rem !important;
    }

    .swiper-slide {
        width: 18.75rem;
        height: 28.125rem;
        display: flex;
        flex-direction: column;
        justify-content: end;
        align-items: self-start;
        position: relative;
    }

    .swiper-slide::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 8px;
    }

    .swiper-slide h2 {
        color: #fff;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-size: 1.4rem;
        line-height: 1.4;
        margin-bottom: 0.625rem;
        padding: 0 0 0 1.563rem;
        text-transform: uppercase;
        position: relative;
    }

    .swiper-slide p {
        color: #dadada;
        font-family: "Roboto", sans-serif;
        font-weight: 300;
        padding: 0 1.563rem;
        line-height: 1.6;
        font-size: 0.75rem;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        position: relative;
    }

    .swiper-slide a {
        margin: 1.25rem 1.563rem 3.438rem 1.563rem;
        padding: 0.438em 1.875rem;
        font-size: 0.9rem;
        position: relative;
    }

    .swiper-slide a:hover {
        color: #005baa;
    }

    .swiper-slide div {
        display: none;
        opacity: 0;
        padding-bottom: 0.625rem;
    }

    .swiper-slide-active div {
        display: block;
        opacity: 1;
    }

    .swiper-slide--one {
        background: url("img/home/qa-side-1.avif") no-repeat 50% 50% / cover;
        border-radius: 8px;
    }

    .swiper-slide--two {
        background: url("img/ndv-web/59.webp") no-repeat 50% 50% / cover;
        border-radius: 8px;
    }

    .swiper-slide--three {
        background: url("img/ndv-web/59.webp") no-repeat 50% 50% / cover;
        border-radius: 8px;
    }



    .swiper-3d .swiper-slide-shadow-left,
    .swiper-3d .swiper-slide-shadow-right {
        background-image: none;
    }

    @media screen and (min-width: 48rem) {
        main {
            display: flex;
            align-items: center;
        }

        .bg,
        .bg2 {
            opacity: 0.1;
        }
    }

    @media screen and (min-width: 93.75rem) {
        .swiper {
            width: 85%;
        }
    }

    .qa-con-blk {
        align-items: center;
        justify-content: center;
        height: 100vh;
        color: #fff;
    }
</style>

<body>
    <div class="container-fluid">
        <div id="page">
            <div class="cover-container d-flex h-100 p-3 mx-auto flex-column d-none">
                <header class="masthead mb-auto">
                    <div class="inner">
                        <h3 class="masthead-brand"></h3>
                        <nav class="nav nav-masthead justify-content-center">
                            <a class="nav-link active" href="#"></a>
                            <a class="nav-link" href="#"></a>
                            <a class="nav-link" href="#"></a>
                        </nav>
                    </div>
                </header>

                <main role="main" class="inner cover">
                    <h1 class="cover-heading"></h1>
                    <p class="lead"></p>
                    <p class="lead">
                        <a href="#" id="trigger" class="btn btn-lg btn-secondary"></a>
                    </p>
                </main>

                <footer class="mastfoot mt-auto">
                    <div class="inner">
                        <p></p>
                    </div>
                </footer>
            </div>
        </div>
        <div class="par" data-aos="zoom-out" data-aos-duration="1200">
            <div class="row qa-con-blk">
                <div class="col-md-5">
                    <div id="west" class="column effect-hover">
                        <div>
                            <!-- <span>discover</span> -->
                            <h1>Quality Assurance Division</h1>
                            <hr>
                            <p>The birth of Quality Assurance (QA) at ND(Vzg) dates back to the Yard's
                                inception in 1972.The Soviet Project Report of 1967 and Government
                                Sanctions of 1970 highlighted the infrastructure and manpower allocated for Quality
                                Assurance, demonstrating the foresight and importance given to QA even 40-50 years ago.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="east" class="column effect-hover">
                        <div class="content">
                            <div class="swiper text-dark">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide--one">
                                        <div class="text-center">
                                            <h2>QA & Lab Division</h2>
                                            <p>The birth of Quality Assurance (QA) at ND(Vzg) dates back to the Yard's
                                                inception in 1972.The Soviet Project Report of 1967 and Government
                                                Sanctions of 1970 highlighted the
                                                infrastructure and manpower allocated for Quality Assurance,
                                                demonstrating the foresight and
                                                importance given to QA even 40-50 years ago.</p>
                                            <a href="quality-assurance-group-1.html"
                                                class="btn btn-outline-light p-0 px-5 py-1">Explore</a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide--two">
                                        <div class="text-center">
                                            <h2>Design Bureau</h2>
                                            <p>The birth of Quality Assurance (QA) at ND(Vzg) dates back to the Yard's
                                                inception in 1972.The Soviet Project Report of 1967 and Government
                                                Sanctions of 1970 highlighted the
                                                infrastructure and manpower allocated for Quality Assurance,
                                                demonstrating the foresight and
                                                importance given to QA even 40-50 years ago.</p>
                                            <a href="quality-assurance-group-1.html"
                                                class="btn btn-outline-light p-0 px-5 py-1">Explore</a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide--three">
                                        <div class="text-center">
                                            <h2>QA & Lab Division</h2>
                                            <p>The birth of Quality Assurance (QA) at ND(Vzg) dates back to the Yard's
                                                inception in 1972.The Soviet Project Report of 1967 and Government
                                                Sanctions of 1970 highlighted the
                                                infrastructure and manpower allocated for Quality Assurance,
                                                demonstrating the foresight and
                                                importance given to QA even 40-50 years ago.</p>
                                            <a href="quality-assurance-group-1.html"
                                                class="btn btn-outline-light p-0 px-5 py-1">Explore</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <canvas id="reveal-effect"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 3,
                slideShadows: true
            },
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 2
                },
                1560: {
                    slidesPerView: 3
                }
            }
        });

    </script>
    <script>
        "use strict";

        let renderer, scene, camera, controls;
        let width, height, cx, cy, wWidth, wHeight;
        const TMath = THREE.Math;
        const conf = {
            color: 0xffffff,
            objectWidth: 6,
            objectThickness: 2,
            ambientColor: 0x0451af,
            light1Color: 0x0451af,
            shadow: false,
            perspective: 90,
            cameraZ: 90
        };

        let objects = [];
        let geometry, material;
        let nx, ny;

        init();

        function init() {
            renderer = new THREE.WebGLRenderer({
                canvas: document.getElementById("reveal-effect"),
                antialias: true,
                alpha: true
            });
            renderer.setSize(window.innerWidth, window.innerHeight);

            camera = new THREE.PerspectiveCamera(
                conf.perspective,
                window.innerWidth / window.innerHeight,
                0.1,
                1000
            );
            camera.position.z = conf.cameraZ;

            controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.dampingFactor = 0.1;
            controls.enableZoom = false;

            scene = new THREE.Scene();
            geometry = new THREE.BoxGeometry(conf.objectWidth, conf.objectWidth, conf.objectThickness);

            window.addEventListener("load", initScene);
            document.getElementById("trigger").addEventListener("click", initScene);

            animate();
        }

        function initScene() {
            onResize();
            scene = new THREE.Scene();
            initLights();
            initObjects();
        }

        function initLights() {
            scene.add(new THREE.AmbientLight(conf.ambientColor));
            const light = new THREE.PointLight(0xffffff);
            light.position.z = 100;
            scene.add(light);
        }

        function initObjects() {
            objects = [];
            nx = Math.round(wWidth / conf.objectWidth) + 1;
            ny = Math.round(wHeight / conf.objectWidth) + 1;

            for (let i = 0; i < nx; i++) {
                for (let j = 0; j < ny; j++) {
                    material = new THREE.MeshLambertMaterial({ color: conf.color, transparent: true, opacity: 1 });
                    const mesh = new THREE.Mesh(geometry, material);
                    const x = -wWidth / 2 + i * conf.objectWidth;
                    const y = -wHeight / 2 + j * conf.objectWidth;
                    mesh.position.set(x, y, 0);
                    objects.push(mesh);
                    scene.add(mesh);
                }
            }
            document.body.classList.add("loaded");
            startAnim();
        }

        function startAnim() {
            document.body.classList.remove("revealed");
            objects.forEach(mesh => {
                mesh.rotation.set(0, 0, 0);
                mesh.material.opacity = 1;
                mesh.position.z = 0;

                const delay = TMath.randFloat(1, 2);
                const rx = TMath.randFloatSpread(2 * Math.PI);
                const ry = TMath.randFloatSpread(2 * Math.PI);
                const rz = TMath.randFloatSpread(2 * Math.PI);

                TweenMax.to(mesh.rotation, 2, { x: rx, y: ry, z: rz, delay: delay });
                TweenMax.to(mesh.position, 2, { z: 80, delay: delay + 0.5, ease: Power1.easeOut });
                TweenMax.to(mesh.material, 2, { opacity: 0, delay: delay + 0.5 });
            });

            setTimeout(() => document.body.classList.add("revealed"), 4500);
        }

        function animate() {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        }

        function onResize() {
            width = window.innerWidth;
            height = window.innerHeight;
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height);
            [wWidth, wHeight] = getRendererSize();
        }

        function getRendererSize() {
            const cam = new THREE.PerspectiveCamera(conf.perspective, camera.aspect);
            const vFOV = cam.fov * Math.PI / 180;
            const height = 2 * Math.tan(vFOV / 2) * Math.abs(conf.cameraZ);
            const width = height * cam.aspect;
            return [width, height];
        }
    </script>


    <div class="menu-icons">
        <div class="home-btn2">
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
        </div>
        <div class="home-btn animate__animated animate__fadeInUp animate__faster">
            <a href="home-page-3.html"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>
        <div class="settings-btn animate__animated animate__fadeInLeft animate__faster">
            <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i></a>
        </div>
        <div class="profile-btn animate__animated animate__fadeInRight animate__faster">
            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
        </div>
    </div>

    <audio id="clickSound" src="audio/click.mp3" preload="auto"></audio>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>

        $(document).ready(function () {
            $("#west .content").click(function () {
                $("#west-overlay").addClass("animated fadeInLeft open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass("animated fadeInLeft");
                });
                $("#west-overlay .product-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass("animated flipInY");
                });
            });
            $("#west-overlay .close-icon").click(function () {
                $("#west-overlay").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass("animated flipOutY open");
                });
            });
            $("#east .content").click(function () {
                $("#east-overlay").addClass("animated fadeInRight open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass("animated fadeInRight");
                });
                $("#east-overlay .product-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass("animated flipInY");
                });
            });
            $("#east-overlay .close-icon").click(function () {
                $("#east-overlay").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass("animated flipOutY open");
                });
            });
        });


        document.addEventListener("DOMContentLoaded", function () {
            const homeBtn = document.querySelector(".home-btn2");
            const menuIcons = document.querySelector(".menu-icons");

            homeBtn.addEventListener("click", function () {
                menuIcons.classList.toggle("expanded");
            });
        });

        const imageLinks = document.querySelectorAll('.n-link');
        const clickSound = document.getElementById('clickSound');

        imageLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                clickSound.play().then(() => {
                    clickSound.onended = () => {
                        window.location.href = link.href;
                    };
                }).catch((err) => {
                    console.error("Audio play error:", err);
                    window.location.href = link.href;
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>

</html>