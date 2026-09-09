<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Culture Sea - Beragam Budaya, Satu Cerita</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Leaflet -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    />

    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #061722;
            color: white;
            overflow-x: hidden;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;

            padding: 0 5%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            z-index: 9999;

            background: linear-gradient(
                to bottom,
                rgba(0,0,0,.65),
                rgba(0,0,0,0)
            );
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;

            color: white;
            text-decoration: none;
        }

        .logo-icon {
            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #009fe3,
                #0064b7
            );

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;

            box-shadow:
                0 5px 20px rgba(0,155,255,.35);
        }

        .logo-text {
            font-family: 'Playfair Display', serif;

            font-size: 28px;
            font-weight: 700;
        }

        .nav-menu {
            display: flex;
            align-items: center;

            gap: 45px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;

            font-size: 14px;
            font-weight: 500;

            transition: .3s;
        }

        .nav-menu a:hover {
            color: #29b6ff;
        }

        .language {
            font-size: 24px;
            cursor: pointer;
        }


        /* =====================================================
           OPENING
        ===================================================== */

        .opening {
            position: relative;

            height: 100vh;
            min-height: 700px;

            overflow: hidden;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
        }

        .opening-video {
            position: absolute;
            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;

            z-index: -4;
        }

        .opening-overlay {
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    rgba(0,0,0,.35),
                    rgba(0,20,35,.72)
                );

            z-index: -3;
        }

        .opening-content {
            position: relative;

            z-index: 5;

            margin-top: 30px;
            padding: 20px;
        }

        .opening-title {
            font-family: 'Playfair Display', serif;

            font-size: clamp(
                65px,
                9vw,
                150px
            );

            font-weight: 800;
            line-height: .95;

            text-shadow:
                0 5px 20px rgba(0,0,0,.5),
                0 0 50px rgba(255,255,255,.12);
        }

        .opening-wave {
            width: 250px;
            height: 12px;

            margin: 10px auto 15px;

            border-radius: 50%;

            border-bottom: 8px solid #00a9ed;

            transform: rotate(-5deg);
        }

        .opening-tagline {
            font-size: clamp(
                18px,
                2vw,
                28px
            );

            letter-spacing: 1px;

            margin-bottom: 30px;
        }

        .explore-button {
            display: inline-flex;

            align-items: center;

            gap: 25px;

            padding: 16px 32px;

            border-radius: 50px;

            color: white;

            text-decoration: none;

            font-size: 17px;
            font-weight: 600;

            background: linear-gradient(
                135deg,
                #0b9bf4,
                #0756c9
            );

            box-shadow:
                0 10px 30px rgba(0,100,255,.45),
                inset 0 1px 0 rgba(255,255,255,.4);

            transition: .35s;
        }

        .explore-button:hover {
            transform:
                translateY(-5px)
                scale(1.03);
        }

        .scroll-indicator {
            position: absolute;

            bottom: 30px;
            left: 50%;

            transform: translateX(-50%);

            display: flex;

            flex-direction: column;
            align-items: center;

            gap: 10px;

            font-size: 13px;
        }

        .mouse {
            width: 20px;
            height: 32px;

            border: 2px solid white;

            border-radius: 15px;

            position: relative;
        }

        .mouse::before {
            content: "";

            position: absolute;

            width: 3px;
            height: 7px;

            background: white;

            border-radius: 5px;

            left: 50%;
            top: 5px;

            transform: translateX(-50%);

            animation:
                mouseMove 1.5s infinite;
        }

        @keyframes mouseMove {

            0% {
                opacity: 0;

                transform:
                    translate(-50%,0);
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;

                transform:
                    translate(-50%,10px);
            }
        }


        /* =====================================================
           SECTION HEADER
        ===================================================== */

        .section-header {
            text-align: center;

            max-width: 900px;

            margin:
                0 auto 50px;
        }

        .section-header h2 {
            font-family:
                'Playfair Display',
                serif;

            font-size:
                clamp(
                    40px,
                    5vw,
                    65px
                );

            margin-bottom: 15px;
        }

        .section-header p {
            color: #aebec9;

            font-size: 17px;

            line-height: 1.8;
        }


        /* =====================================================
           HISTORY ASEAN
        ===================================================== */

        .history-section {
            padding: 110px 5%;

            background:
                radial-gradient(
                    circle at 10% 15%,
                    rgba(242,174,53,.14),
                    transparent 28%
                ),
                #08202d;
        }

        .history-container {
            max-width: 1180px;
            margin: auto;
        }

        .history-intro {
            padding: 30px;

            border-left:
                4px solid #f2c14e;

            border-radius:
                0 18px 18px 0;

            background: #0c2a3a;

            color: #c5d4da;

            line-height: 1.9;
        }

        .history-timeline {
            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 18px;

            margin: 38px 0;
        }

        .timeline-card,
        .founder-card {
            padding: 24px;

            border:
                1px solid
                rgba(255,255,255,.14);

            border-radius: 20px;

            background: #0b2736;
        }

        .timeline-year {
            color: #f2c14e;

            font-size: 22px;

            font-weight: 700;
        }

        .timeline-card h3,
        .founder-card h3 {
            margin: 8px 0;

            font-size: 18px;
        }

        .timeline-card p,
        .founder-card p {
            color: #aebfc9;

            font-size: 13px;

            line-height: 1.75;
        }

        .founders-title {
            font-family:
                'Playfair Display',
                serif;

            font-size: 32px;

            margin:
                45px 0 18px;
        }

        .founders-grid {
            display: grid;

            grid-template-columns:
                repeat(5,1fr);

            gap: 14px;
        }

        .founder-icon {
            width: 48px;
            height: 48px;

            display: grid;

            place-items: center;

            border-radius: 50%;

            background: #12628a;

            font-size: 23px;
        }


        /* =====================================================
           MAP SECTION
        ===================================================== */

        .map-section {
            padding: 100px 3%;

            background:
                radial-gradient(
                    circle at top,
                    rgba(0,143,255,.15),
                    transparent 50%
                ),
                #061722;
        }

        .map-wrapper {
            position: relative;

            width: 100%;

            max-width: 1750px;

            margin: auto;
        }

        #map {
            width: 100%;

            height:
                clamp(
                    550px,
                    70vh,
                    780px
                );

            border-radius: 30px;

            overflow: hidden;

            border:
                2px solid
                rgba(255,255,255,.7);

            box-shadow:
                0 25px 80px
                rgba(0,0,0,.45),

                0 0 50px
                rgba(0,150,255,.08);
        }

        .reset-map {
            position: absolute;

            top: 28px;
            right: 28px;

            z-index: 1000;

            border: none;

            border-radius: 40px;

            padding: 17px 28px;

            color: white;

            background: #092535;

            font-family:
                'Poppins',
                sans-serif;

            font-size: 15px;

            font-weight: 500;

            cursor: pointer;

            box-shadow:
                0 10px 30px
                rgba(0,0,0,.25);

            transition: .3s;
        }

        .reset-map:hover {
            background: #0d3b54;

            transform:
                translateY(-2px);
        }


        /* =====================================================
           FLAG MARKER
        ===================================================== */

        .flag-marker {
            position: relative;

            width: 110px;
            height: 145px;

            cursor: pointer;

            transform-origin:
                bottom center;
        }

        .flag-marker-inner {
            position: absolute;

            left: 50%;
            bottom: 0;

            width: 110px;
            height: 145px;

            transform:
                translateX(-50%);
        }

        .flag-pole {
            position: absolute;

            left: 50%;
            bottom: 8px;

            width: 4px;
            height: 105px;

            background:
                linear-gradient(
                    to right,
                    #555,
                    #eee,
                    #777
                );

            border-radius: 5px;

            transform:
                translateX(-50%);

            box-shadow:
                1px 0 3px
                rgba(0,0,0,.5);
        }

        .flag-pole::before {
            content: "";

            position: absolute;

            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: #f5d76e;

            left: 50%;
            top: -6px;

            transform:
                translateX(-50%);

            box-shadow:
                0 0 8px
                rgba(255,210,80,.8);
        }

        .flag-image {
            position: absolute;

            top: 12px;
            left: 50%;

            width: 65px;
            height: 43px;

            object-fit: cover;

            transform-origin:
                left center;

            transform:
                translateX(-3px);

            border-radius: 2px;

            box-shadow:
                0 4px 10px
                rgba(0,0,0,.35);

            animation:
                flagWave 2.4s
                ease-in-out infinite;
        }

        @keyframes flagWave {

            0%,100% {
                transform:
                    translateX(-3px)
                    skewY(0deg);
            }

            50% {
                transform:
                    translateX(-3px)
                    skewY(3deg);
            }
        }

        .flag-shadow {
            position: absolute;

            left: 50%;
            bottom: 3px;

            width: 55px;
            height: 12px;

            background:
                rgba(0,0,0,.35);

            border-radius: 50%;

            transform:
                translateX(-50%);

            filter: blur(3px);
        }

        .flag-name {
            position: absolute;

            left: 50%;
            top: 59px;

            transform:
                translateX(-50%);

            white-space: nowrap;

            padding: 6px 12px;

            border-radius: 8px;

            color: white;

            background:
                rgba(5,20,30,.9);

            font-size: 12px;

            font-weight: 600;

            box-shadow:
                0 5px 15px
                rgba(0,0,0,.35);

            opacity: 0;

            transition: .25s;

            pointer-events: none;
        }

        .flag-marker:hover .flag-name {
            opacity: 1;
        }

        .flag-marker.active {
            animation:
                markerBounce .8s ease;
        }

        .flag-marker.active .flag-image {
            filter:
                brightness(1.2);

            box-shadow:
                0 0 20px
                rgba(0,180,255,.8);
        }

        @keyframes markerBounce {

            0%,100% {
                transform:
                    translateY(0);
            }

            40% {
                transform:
                    translateY(-15px);
            }

            70% {
                transform:
                    translateY(-5px);
            }
        }


        /* =====================================================
           POPUP MAP
        ===================================================== */

        .leaflet-popup-content-wrapper {
            background: #09202d;

            color: white;

            border-radius: 15px;
        }

        .leaflet-popup-tip {
            background: #09202d;
        }

        .leaflet-popup-content {
            margin: 18px;

            font-family:
                'Poppins',
                sans-serif;
        }

        .popup-country {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 8px;
        }

        .popup-country img {
            width: 42px;
            height: 28px;

            object-fit: cover;

            border-radius: 3px;
        }

        .popup-country h3 {
            font-size: 18px;
        }

        .popup-capital {
            color: #a9c0cc;

            font-size: 13px;

            margin-bottom: 12px;
        }

        .popup-button {
            display: inline-block;

            padding: 8px 14px;

            border-radius: 20px;

            color: white;

            background: #087fd0;

            text-decoration: none;

            font-size: 12px;

            font-weight: 600;

            transition: .25s;
        }

        .popup-button:hover {
            background: #0ba4ed;
        }


        /* =====================================================
           COUNTRY SECTION
        ===================================================== */

        .countries-section {
            padding: 110px 5%;

            background: #071d29;
        }

        .countries-container {
            max-width: 1250px;

            margin: auto;
        }


        /* =====================================================
           COUNTRY CARD
        ===================================================== */

        .country-card {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            min-height: 390px;

            margin-bottom: 50px;

            overflow: hidden;

            border-radius: 25px;

            background: #0c2635;

            box-shadow:
                0 20px 50px
                rgba(0,0,0,.25);

            opacity: 0;

            transform:
                translateY(40px);

            transition:
                opacity .7s ease,
                transform .7s ease;
        }

        .country-card.show {
            opacity: 1;

            transform:
                translateY(0);
        }


        /* =====================================================
           FOTO NEGARA
           PERBAIKAN UTAMA
        ===================================================== */

        .country-image {
            width: 100%;
            height: 100%;

            min-height: 390px;

            overflow: hidden;

            position: relative;

            background: #0c2635;

            /*
             * Mencegah adanya ruang kosong
             */
            display: block;
        }

        .country-image img {
            display: block;

            width: 100%;
            height: 100%;

            min-height: 390px;

            /*
             * Foto memenuhi seluruh kotak
             * tanpa bagian putih
             */
            object-fit: cover;

            /*
             * Posisi tengah foto
             */
            object-position: center center;

            transition:
                transform .6s ease;
        }

        .country-card:hover
        .country-image img {
            transform:
                scale(1.06);
        }


        /* Kartu genap */

        .country-card:nth-child(even)
        .country-image {
            order: 2;
        }

        .country-card:nth-child(even)
        .country-info {
            order: 1;
        }


        /* =====================================================
           COUNTRY INFO
        ===================================================== */

        .country-info {
            padding: 55px;

            display: flex;

            flex-direction: column;

            justify-content: center;
        }

        .country-flag {
            width: 58px;
            height: 38px;

            object-fit: cover;

            margin-bottom: 20px;

            border-radius: 4px;

            box-shadow:
                0 5px 15px
                rgba(0,0,0,.3);
        }

        .country-info h3 {
            font-family:
                'Playfair Display',
                serif;

            font-size: 40px;

            margin-bottom: 10px;
        }

        .country-info .capital {
            color: #32baff;

            font-size: 14px;

            margin-bottom: 20px;
        }

        .country-info p {
            color: #aebfc9;

            line-height: 1.8;

            font-size: 14px;

            margin-bottom: 25px;
        }

        .country-button {
            width: fit-content;

            padding: 12px 22px;

            border-radius: 30px;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #078eda,
                    #0752b7
                );

            text-decoration: none;

            font-size: 13px;

            font-weight: 600;

            transition: .3s;
        }

        .country-button:hover {
            transform:
                translateY(-3px);

            box-shadow:
                0 10px 25px
                rgba(0,130,255,.3);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            padding: 50px 20px;

            text-align: center;

            background: #04121b;

            color: #8296a1;
        }

        footer strong {
            display: block;

            font-family:
                'Playfair Display',
                serif;

            color: white;

            font-size: 25px;

            margin-bottom: 8px;
        }


        /* =====================================================
           PAGE TRANSITION - DOOR
        ===================================================== */

        .page-transition {
            position: fixed;

            inset: 0;

            z-index: 20000;

            display: flex;

            overflow: hidden;

            pointer-events: none;

            perspective: 1600px;

            perspective-origin:
                center center;

            visibility: hidden;

            opacity: 0;

            background: #070e12;

            transition:
                opacity .12s ease;

            transform:
                translateZ(0);
        }

        .page-transition.is-running {
            visibility: visible;

            opacity: 1;
        }

        .door {
            position: relative;

            width: 50%;
            height: 100%;

            overflow: hidden;

            background:
                linear-gradient(
                    90deg,
                    #3c180d 0%,
                    #80421f 48%,
                    #4b210f 100%
                );

            box-shadow:
                inset 0 0 0 16px #2a120a,
                inset 0 0 0 22px #a66a36,
                inset 0 0 35px #120703;

            transform-style:
                preserve-3d;

            backface-visibility:
                hidden;

            will-change:
                transform;

            transition:
                transform 1.05s
                cubic-bezier(
                    .65,
                    0,
                    .2,
                    1
                );
        }

        .door::before,
        .door::after {
            content: '';

            position: absolute;

            left: 13%;
            right: 13%;

            height: 31%;

            border:
                7px solid
                rgba(28,10,4,.75);

            box-shadow:
                inset 0 0 25px
                rgba(255,203,132,.13),

                0 0 0 3px
                rgba(190,123,61,.45);

            pointer-events: none;
        }

        .door::before {
            top: 13%;
        }

        .door::after {
            bottom: 13%;
        }

        .door.left {
            transform-origin:
                left center;

            transform:
                rotateY(0deg)
                translateZ(0);
        }

        .door.right {
            transform-origin:
                right center;

            transform:
                rotateY(0deg)
                translateZ(0);
        }

        .door-knob {
            position: absolute;

            top: 49%;

            z-index: 3;

            width: 28px;
            height: 28px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle at 30% 30%,
                    #ffe99d 0%,
                    #b87810 70%
                );

            box-shadow:
                0 2px 7px #140700;

            transform:
                translateZ(20px);

            backface-visibility:
                hidden;
        }

        .door.left .door-knob {
            right: 32px;
        }

        .door.right .door-knob {
            left: 32px;
        }

        .page-transition.is-opening
        .door.left {
            transform:
                rotateY(-88deg)
                translateZ(0);
        }

        .page-transition.is-opening
        .door.right {
            transform:
                rotateY(88deg)
                translateZ(0);
        }

        .page-transition.is-finished {
            opacity: 0;

            visibility: hidden;
        }

        .page-transition,
        .page-transition * {
            -webkit-backface-visibility:
                hidden;
        }


        /* =====================================================
           RESPONSIVE TABLET
        ===================================================== */

        @media (max-width: 900px) {

            .nav-menu {
                display: none;
            }

            .opening {
                min-height: 650px;
            }

            .opening-title {
                font-size:
                    clamp(
                        55px,
                        15vw,
                        100px
                    );
            }

            #map {
                height: 600px;

                border-radius: 20px;
            }

            .country-card {
                grid-template-columns: 1fr;
            }

            .country-card:nth-child(even)
            .country-image,
            .country-card:nth-child(even)
            .country-info {
                order: initial;
            }


            /* FOTO MOBILE TABLET */

            .country-image {
                width: 100%;

                height: 280px;

                min-height: 280px;
            }

            .country-image img {
                width: 100%;

                height: 280px;

                min-height: 280px;

                object-fit: cover;

                object-position:
                    center center;

                display: block;
            }

            .country-info {
                padding: 35px;
            }

            .country-info h3 {
                font-size: 32px;
            }

            .history-timeline {
                grid-template-columns: 1fr;
            }

            .founders-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }
        }


        /* =====================================================
           RESPONSIVE MOBILE
        ===================================================== */

        @media (max-width: 600px) {

            .navbar {
                height: 70px;

                padding:
                    0 20px;
            }

            .logo-text {
                font-size: 22px;
            }

            .logo-icon {
                width: 36px;
                height: 36px;

                font-size: 18px;
            }

            .language {
                display: none;
            }


            /* OPENING */

            .opening {
                min-height: 600px;
            }

            .opening-title {
                font-size:
                    clamp(
                        45px,
                        14vw,
                        80px
                    );
            }

            .opening-tagline {
                font-size: 16px;
            }

            .explore-button {
                padding:
                    13px 24px;

                font-size: 14px;

                gap: 15px;
            }


            /* MAP */

            .map-section {
                padding:
                    70px 15px;
            }

            .section-header {
                margin-bottom: 30px;
            }

            .section-header h2 {
                font-size: 38px;
            }

            .section-header p {
                font-size: 14px;
            }

            #map {
                height: 520px;

                border-radius: 18px;
            }

            .reset-map {
                top: 15px;
                right: 15px;

                padding:
                    11px 15px;

                font-size: 11px;
            }


            /* FLAG */

            .flag-marker {
                width: 75px;
                height: 115px;
            }

            .flag-marker-inner {
                width: 75px;
                height: 115px;
            }

            .flag-pole {
                height: 85px;
            }

            .flag-image {
                width: 48px;
                height: 32px;

                top: 8px;
            }

            .flag-name {
                top: 42px;

                font-size: 9px;

                padding:
                    4px 7px;
            }


            /* COUNTRY */

            .countries-section {
                padding:
                    70px 15px;
            }

            .country-card {
                margin-bottom: 30px;

                border-radius: 18px;
            }


            /*
             * FOTO MEMENUHI KOTAK
             * TANPA PUTIH
             */

            .country-image {
                width: 100%;

                height: 230px;

                min-height: 230px;

                overflow: hidden;

                background: #0c2635;
            }

            .country-image img {
                display: block;

                width: 100%;

                height: 230px;

                min-height: 230px;

                object-fit: cover;

                object-position:
                    center center;
            }

            .country-info {
                padding: 28px;
            }

            .country-info h3 {
                font-size: 28px;
            }


            /* HISTORY */

            .history-section {
                padding:
                    70px 15px;
            }

            .history-intro {
                padding: 20px;

                font-size: 13px;
            }

            .founders-title {
                font-size: 27px;
            }

            .founders-grid {
                grid-template-columns: 1fr;
            }


            /* DOOR */

            .page-transition {
                perspective: 1200px;
            }

            .door {
                transition-duration:
                    .9s;
            }

            .door.left
            .door-knob {
                right: 22px;
            }

            .door.right
            .door-knob {
                left: 22px;
            }
        }

    </style>
</head>


<body>


    <!-- =====================================================
         NAVBAR
    ===================================================== -->

    <header class="navbar">

        <a href="/" class="logo">

            <div class="logo-icon">
                ≋
            </div>

            <div class="logo-text">
                Culture Sea
            </div>

        </a>


        <nav class="nav-menu">

            <a href="#beranda">
                Beranda
            </a>

            <a href="#tentang">
                Tentang
            </a>

            <a href="#sejarah">
                Sejarah ASEAN
            </a>

            <a href="#negara">
                Negara ASEAN
            </a>

            <a href="#kontak">
                Kontak
            </a>

        </nav>


        <div class="language">
            ◉⌄
        </div>

    </header>



    <!-- =====================================================
         OPENING
    ===================================================== -->

    <section
        class="opening"
        id="beranda"
    >

        <video
            class="opening-video"
            autoplay
            muted
            loop
            playsinline
            poster="/images/culture-sea-poster.png"
        >

            <source
                src="/videos/asean.mp4"
                type="video/mp4"
            >

        </video>


        <div class="opening-overlay"></div>


        <div class="opening-content">

            <h1 class="opening-title">
                Culture Sea
            </h1>

            <div class="opening-wave"></div>

            <p class="opening-tagline">
                “Beragam budaya, satu cerita”
            </p>


            <a
                href="#peta"
                class="explore-button"
            >

                Jelajahi ASEAN

                <span>
                    →
                </span>

            </a>

        </div>


        <div class="scroll-indicator">

            <div class="mouse"></div>

            <span>
                Scroll untuk mulai
            </span>

            <span>
                ⌄
            </span>

        </div>

    </section>



    <!-- =====================================================
         SEJARAH ASEAN
    ===================================================== -->

    <section
        class="history-section"
        id="sejarah"
    >

        <div class="section-header">

            <h2>
                Sejarah Terbentuknya ASEAN
            </h2>

            <p>
                Perjalanan negara-negara Asia Tenggara
                membangun kawasan yang damai, stabil,
                dan sejahtera.
            </p>

        </div>


        <div class="history-intro">

            ASEAN atau Association of Southeast Asian Nations
            didirikan pada
            <strong>8 Agustus 1967</strong>
            melalui Deklarasi Bangkok.

            Organisasi ini dibentuk untuk mempercepat
            kerja sama ekonomi, sosial, dan budaya serta
            menjaga perdamaian dan stabilitas di Asia Tenggara.

        </div>


        <div class="history-timeline">


            <article class="timeline-card">

                <div class="timeline-year">
                    1967
                </div>

                <h3>
                    Deklarasi Bangkok
                </h3>

                <p>
                    Lima negara pendiri menandatangani
                    deklarasi yang menjadi dasar
                    berdirinya ASEAN.
                </p>

            </article>


            <article class="timeline-card">

                <div class="timeline-year">
                    1976
                </div>

                <h3>
                    KTT ASEAN Pertama
                </h3>

                <p>
                    Pertemuan di Bali menghasilkan
                    Treaty of Amity and Cooperation
                    sebagai komitmen hidup berdampingan
                    secara damai.
                </p>

            </article>


            <article class="timeline-card">

                <div class="timeline-year">
                    1999
                </div>

                <h3>
                    ASEAN-10
                </h3>

                <p>
                    Dengan bergabungnya Kamboja,
                    ASEAN mencakup seluruh sepuluh
                    negara di Asia Tenggara.
                </p>

            </article>

        </div>


        <h3 class="founders-title">
            Lima Tokoh Pendiri ASEAN
        </h3>


        <div class="founders-grid">


            <article class="founder-card">

                <div class="founder-icon">
                    🇮🇩
                </div>

                <h3>
                    Adam Malik
                </h3>

                <p>
                    Menteri Luar Negeri Indonesia
                    dan penandatangan Deklarasi Bangkok.
                </p>

            </article>


            <article class="founder-card">

                <div class="founder-icon">
                    🇲🇾
                </div>

                <h3>
                    Tun Abdul Razak
                </h3>

                <p>
                    Wakil Perdana Menteri Malaysia
                    pada saat pembentukan ASEAN.
                </p>

            </article>


            <article class="founder-card">

                <div class="founder-icon">
                    🇵🇭
                </div>

                <h3>
                    Narciso R. Ramos
                </h3>

                <p>
                    Menteri Luar Negeri Filipina
                    dan salah satu pendiri ASEAN.
                </p>

            </article>


            <article class="founder-card">

                <div class="founder-icon">
                    🇸🇬
                </div>

                <h3>
                    S. Rajaratnam
                </h3>

                <p>
                    Menteri Luar Negeri Singapura,
                    penandatangan Deklarasi Bangkok.
                </p>

            </article>


            <article class="founder-card">

                <div class="founder-icon">
                    🇹🇭
                </div>

                <h3>
                    Thanat Khoman
                </h3>

                <p>
                    Menteri Luar Negeri Thailand,
                    tuan rumah penandatanganan
                    Deklarasi Bangkok.
                </p>

            </article>


        </div>

    </section>



    <!-- =====================================================
         MAP
    ===================================================== -->

    <section
        class="map-section"
        id="peta"
    >

        <div class="section-header">

            <h2>
                Jelajahi ASEAN
            </h2>

            <p>
                Jelajahi negara-negara Asia Tenggara
                melalui peta interaktif.
                Klik bendera untuk melihat lokasi
                dan mengenal lebih jauh setiap negara.
            </p>

        </div>


        <div class="map-wrapper">

            <button
                class="reset-map"
                id="resetMap"
            >
                🌎 Kembali ke ASEAN
            </button>


            <div id="map"></div>

        </div>

    </section>



    <!-- =====================================================
         DAFTAR NEGARA ASEAN
    ===================================================== -->

    <section
        class="countries-section"
        id="negara"
    >

        <div class="section-header">

            <h2>
                Negara ASEAN
            </h2>

            <p>
                Kenali keberagaman budaya, tradisi,
                kuliner, bahasa, dan keindahan
                setiap negara.
            </p>

        </div>


        <div class="countries-container">


            <!-- INDONESIA -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/indonesia.jpg"
                        alt="Indonesia"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/id.png"
                        alt="Bendera Indonesia"
                    >

                    <h3>
                        Indonesia
                    </h3>

                    <div class="capital">
                        Ibu kota: Jakarta
                    </div>

                    <p>
                        Negara kepulauan dengan keberagaman
                        budaya, bahasa, suku, tradisi, makanan,
                        dan kekayaan alam yang sangat beragam.
                    </p>

                    <a
                        href="/countries/indonesia"
                        class="country-button"
                    >
                        Jelajahi Indonesia →
                    </a>

                </div>

            </article>



            <!-- MALAYSIA -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/malaysia.jpg"
                        alt="Malaysia"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/my.png"
                        alt="Bendera Malaysia"
                    >

                    <h3>
                        Malaysia
                    </h3>

                    <div class="capital">
                        Ibu kota: Kuala Lumpur
                    </div>

                    <p>
                        Negara multikultural yang memiliki
                        perpaduan budaya Melayu, Tionghoa,
                        India, serta berbagai kelompok
                        masyarakat lainnya.
                    </p>

                    <a
                        href="/countries/malaysia"
                        class="country-button"
                    >
                        Jelajahi Malaysia →
                    </a>

                </div>

            </article>



            <!-- SINGAPORE -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/singapore.jpg"
                        alt="Singapore"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/sg.png"
                        alt="Bendera Singapore"
                    >

                    <h3>
                        Singapore
                    </h3>

                    <div class="capital">
                        Ibu kota: Singapore
                    </div>

                    <p>
                        Negara kota modern dengan perpaduan
                        budaya Melayu, Tionghoa, India
                        dan berbagai komunitas internasional.
                    </p>

                    <a
                        href="/countries/singapore"
                        class="country-button"
                    >
                        Jelajahi Singapore →
                    </a>

                </div>

            </article>



            <!-- THAILAND -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/thailand.jpg"
                        alt="Thailand"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/th.png"
                        alt="Bendera Thailand"
                    >

                    <h3>
                        Thailand
                    </h3>

                    <div class="capital">
                        Ibu kota: Bangkok
                    </div>

                    <p>
                        Terkenal dengan budaya Thailand,
                        kuil-kuil bersejarah, seni tradisional,
                        festival, dan kuliner khasnya.
                    </p>

                    <a
                        href="/countries/thailand"
                        class="country-button"
                    >
                        Jelajahi Thailand →
                    </a>

                </div>

            </article>



            <!-- VIETNAM -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/vietnam.jpg"
                        alt="Vietnam"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/vn.png"
                        alt="Bendera Vietnam"
                    >

                    <h3>
                        Vietnam
                    </h3>

                    <div class="capital">
                        Ibu kota: Hanoi
                    </div>

                    <p>
                        Memiliki sejarah panjang, budaya
                        tradisional, arsitektur khas,
                        pakaian tradisional dan kuliner
                        yang terkenal.
                    </p>

                    <a
                        href="/countries/vietnam"
                        class="country-button"
                    >
                        Jelajahi Vietnam →
                    </a>

                </div>

            </article>



            <!-- PHILIPPINES -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/philippines.jpg"
                        alt="Philippines"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/ph.png"
                        alt="Bendera Philippines"
                    >

                    <h3>
                        Philippines
                    </h3>

                    <div class="capital">
                        Ibu kota: Manila
                    </div>

                    <p>
                        Negara kepulauan dengan budaya
                        yang dipengaruhi oleh tradisi lokal
                        serta sejarah Asia dan Barat.
                    </p>

                    <a
                        href="/countries/philippines"
                        class="country-button"
                    >
                        Jelajahi Philippines →
                    </a>

                </div>

            </article>



            <!-- BRUNEI -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/brunei.jpg"
                        alt="Brunei"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/bn.png"
                        alt="Bendera Brunei"
                    >

                    <h3>
                        Brunei
                    </h3>

                    <div class="capital">
                        Ibu kota: Bandar Seri Begawan
                    </div>

                    <p>
                        Negara kecil di Pulau Borneo yang
                        memiliki budaya Melayu yang kuat
                        dan warisan Islam yang menjadi bagian
                        penting kehidupan masyarakat.
                    </p>

                    <a
                        href="/countries/brunei"
                        class="country-button"
                    >
                        Jelajahi Brunei →
                    </a>

                </div>

            </article>



            <!-- CAMBODIA -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/cambodia.jpg"
                        alt="Cambodia"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/kh.png"
                        alt="Bendera Cambodia"
                    >

                    <h3>
                        Cambodia
                    </h3>

                    <div class="capital">
                        Ibu kota: Phnom Penh
                    </div>

                    <p>
                        Memiliki warisan Khmer yang kuat
                        dengan peninggalan sejarah dan
                        arsitektur terkenal seperti
                        kompleks Angkor.
                    </p>

                    <a
                        href="/countries/cambodia"
                        class="country-button"
                    >
                        Jelajahi Cambodia →
                    </a>

                </div>

            </article>



            <!-- LAOS -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/laos.jpg"
                        alt="Laos"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/la.png"
                        alt="Bendera Laos"
                    >

                    <h3>
                        Laos
                    </h3>

                    <div class="capital">
                        Ibu kota: Vientiane
                    </div>

                    <p>
                        Negara yang kaya akan budaya
                        tradisional, kehidupan masyarakat
                        yang tenang, kuil, serta keindahan
                        alam pegunungan.
                    </p>

                    <a
                        href="/countries/laos"
                        class="country-button"
                    >
                        Jelajahi Laos →
                    </a>

                </div>

            </article>



            <!-- MYANMAR -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/myanmar.jpg"
                        alt="Myanmar"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/mm.png"
                        alt="Bendera Myanmar"
                    >

                    <h3>
                        Myanmar
                    </h3>

                    <div class="capital">
                        Ibu kota: Naypyidaw
                    </div>

                    <p>
                        Memiliki warisan budaya yang kaya
                        dengan pagoda, tradisi masyarakat,
                        seni, serta berbagai kelompok etnis.
                    </p>

                    <a
                        href="/countries/myanmar"
                        class="country-button"
                    >
                        Jelajahi Myanmar →
                    </a>

                </div>

            </article>



            <!-- TIMOR-LESTE -->

            <article class="country-card">

                <div class="country-image">

                    <img
                        src="/images/countries/timor-leste.jpg"
                        alt="Timor-Leste"
                    >

                </div>


                <div class="country-info">

                    <img
                        class="country-flag"
                        src="https://flagcdn.com/w80/tl.png"
                        alt="Bendera Timor-Leste"
                    >

                    <h3>
                        Timor-Leste
                    </h3>

                    <div class="capital">
                        Ibu kota: Dili
                    </div>

                    <p>
                        Negara dengan perpaduan budaya
                        Austronesia, tradisi lokal,
                        sejarah panjang, serta keindahan
                        alam pesisir dan pegunungan.
                    </p>

                    <a
                        href="/countries/timor-leste"
                        class="country-button"
                    >
                        Jelajahi Timor-Leste →
                    </a>

                </div>

            </article>


        </div>

    </section>



    <!-- =====================================================
         FOOTER
    ===================================================== -->

    <footer id="kontak">

        <strong>
            Culture Sea
        </strong>

        <p>
            Beragam budaya, satu cerita
        </p>

        <p style="margin-top:15px;">
            © 2026 Culture Sea
        </p>

    </footer>



    <!-- =====================================================
         LEAFLET JS
    ===================================================== -->

    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
    </script>



    <!-- =====================================================
         PAGE TRANSITION
    ===================================================== -->

    <div
        class="page-transition"
        id="pageTransition"
        aria-hidden="true"
    >

        <div class="door left">

            <span class="door-knob"></span>

        </div>


        <div class="door right">

            <span class="door-knob"></span>

        </div>

    </div>



    <script>

        /* =====================================================
           TRANSISI PINTU
        ===================================================== */

        document
            .querySelectorAll('.country-button')
            .forEach(link => {

                link.addEventListener(
                    'click',
                    event => {

                        event.preventDefault();

                        const transition =
                            document.getElementById(
                                'pageTransition'
                            );

                        const targetUrl =
                            link.href;


                        transition.classList
                            .remove(
                                'is-finished'
                            );

                        transition.classList
                            .remove(
                                'is-opening'
                            );

                        transition.classList
                            .add(
                                'is-running'
                            );


                        requestAnimationFrame(() => {

                            requestAnimationFrame(() => {

                                transition.classList
                                    .add(
                                        'is-opening'
                                    );

                            });

                        });


                        setTimeout(() => {

                            window.location.href =
                                targetUrl;

                        }, 1150);

                    }
                );

            });



        /* =====================================================
           DATA NEGARA ASEAN
        ===================================================== */

        const countries = [

            {
                name: "Myanmar",
                code: "mm",
                capital: "Naypyidaw",
                lat: 21.9162,
                lng: 95.9560,
                zoom: 6,
                slug: "myanmar"
            },

            {
                name: "Laos",
                code: "la",
                capital: "Vientiane",
                lat: 19.8563,
                lng: 102.4955,
                zoom: 7,
                slug: "laos"
            },

            {
                name: "Thailand",
                code: "th",
                capital: "Bangkok",
                lat: 15.8700,
                lng: 100.9925,
                zoom: 6,
                slug: "thailand"
            },

            {
                name: "Vietnam",
                code: "vn",
                capital: "Hanoi",
                lat: 14.0583,
                lng: 108.2772,
                zoom: 6,
                slug: "vietnam"
            },

            {
                name: "Cambodia",
                code: "kh",
                capital: "Phnom Penh",
                lat: 12.5657,
                lng: 104.9910,
                zoom: 7,
                slug: "cambodia"
            },

            {
                name: "Philippines",
                code: "ph",
                capital: "Manila",
                lat: 12.8797,
                lng: 121.7740,
                zoom: 6,
                slug: "philippines"
            },

            {
                name: "Malaysia",
                code: "my",
                capital: "Kuala Lumpur",
                lat: 4.2105,
                lng: 101.9758,
                zoom: 6,
                slug: "malaysia"
            },

            {
                name: "Brunei",
                code: "bn",
                capital: "Bandar Seri Begawan",
                lat: 4.5353,
                lng: 114.7277,
                zoom: 9,
                slug: "brunei"
            },

            {
                name: "Singapore",
                code: "sg",
                capital: "Singapore",
                lat: 1.3521,
                lng: 103.8198,
                zoom: 11,
                slug: "singapore"
            },

            {
                name: "Indonesia",
                code: "id",
                capital: "Jakarta",
                lat: -2.5489,
                lng: 118.0149,
                zoom: 5,
                slug: "indonesia"
            },

            {
                name: "Timor-Leste",
                code: "tl",
                capital: "Dili",
                lat: -8.8742,
                lng: 125.7275,
                zoom: 8,
                slug: "timor-leste"
            }

        ];



        /* =====================================================
           MEMBUAT PETA
        ===================================================== */

        const map = L.map('map', {

            center: [
                5,
                110
            ],

            zoom: 4,

            minZoom: 3,

            maxZoom: Infinity,

            zoomControl: true,

            scrollWheelZoom: true,

            dragging: true,

            doubleClickZoom: true,

            touchZoom: true,

            boxZoom: true,

            keyboard: true,

            zoomAnimation: true,

            fadeAnimation: true,

            markerZoomAnimation: true

        });



        /* =====================================================
           TILE MAP
        ===================================================== */

        L.tileLayer(

            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',

            {

                attribution:
                    '&copy; OpenStreetMap contributors',

                maxZoom: 19,

                updateWhenZooming: false,

                updateWhenIdle: true,

                keepBuffer: 2

            }

        ).addTo(map);



        /* =====================================================
           ICON BENDERA
        ===================================================== */

        function createFlagIcon(country) {

            return L.divIcon({

                className:
                    'custom-flag-marker',

                html: `

                    <div
                        class="flag-marker"
                        id="marker-${country.code}"
                    >

                        <div
                            class="flag-marker-inner"
                        >

                            <div
                                class="flag-shadow"
                            ></div>


                            <div
                                class="flag-pole"
                            ></div>


                            <img
                                class="flag-image"
                                src="https://flagcdn.com/w160/${country.code}.png"
                                alt="${country.name}"
                            >


                            <div
                                class="flag-name"
                            >
                                ${country.name}
                            </div>

                        </div>

                    </div>

                `,

                iconSize: [
                    110,
                    145
                ],

                iconAnchor: [
                    55,
                    145
                ],

                popupAnchor: [
                    0,
                    -140
                ]

            });

        }



        /* =====================================================
           POPUP
        ===================================================== */

        function createPopup(country) {

            return `

                <div>

                    <div
                        class="popup-country"
                    >

                        <img
                            src="https://flagcdn.com/w80/${country.code}.png"
                            alt="${country.name}"
                        >

                        <h3>
                            ${country.name}
                        </h3>

                    </div>


                    <div
                        class="popup-capital"
                    >

                        Ibu kota:

                        <strong>
                            ${country.capital}
                        </strong>

                    </div>


                    <a
                        href="/countries/${country.slug}"
                        class="popup-button"
                    >

                        Jelajahi
                        ${country.name}
                        →

                    </a>

                </div>

            `;

        }



        /* =====================================================
           TAMBAHKAN SEMUA BENDERA
        ===================================================== */

        countries.forEach(country => {

            const marker = L.marker(

                [
                    country.lat,
                    country.lng
                ],

                {
                    icon:
                        createFlagIcon(
                            country
                        ),

                    riseOnHover: true
                }

            ).addTo(map);


            marker.bindPopup(

                createPopup(country),

                {
                    maxWidth: 260
                }

            );


            marker.on(
                'click',
                function() {

                    map.flyTo(

                        [
                            country.lat,
                            country.lng
                        ],

                        country.zoom,

                        {
                            duration: 1.4,

                            easeLinearity: .25
                        }

                    );


                    setTimeout(() => {

                        const markerElement =
                            document.getElementById(
                                `marker-${country.code}`
                            );


                        if (
                            markerElement
                        ) {

                            markerElement
                                .classList
                                .add(
                                    'active'
                                );


                            setTimeout(() => {

                                markerElement
                                    .classList
                                    .remove(
                                        'active'
                                    );

                            }, 900);

                        }

                    }, 300);

                }
            );

        });



        /* =====================================================
           RESET MAP
        ===================================================== */

        document
            .getElementById('resetMap')
            .addEventListener(
                'click',
                function() {

                    map.flyTo(

                        [
                            5,
                            110
                        ],

                        4,

                        {
                            duration: 1.5,

                            easeLinearity: .25
                        }

                    );

                }
            );



        /* =====================================================
           INVALIDATE MAP SIZE
        ===================================================== */

        window.addEventListener(
            'resize',
            function() {

                map.invalidateSize();

            }
        );


        setTimeout(
            function() {

                map.invalidateSize();

            },
            500
        );



        /* =====================================================
           ANIMASI COUNTRY CARD
        ===================================================== */

        const cards =
            document.querySelectorAll(
                '.country-card'
            );


        const observer =
            new IntersectionObserver(

                entries => {

                    entries.forEach(
                        entry => {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target
                                    .classList
                                    .add(
                                        'show'
                                    );


                                observer.unobserve(
                                    entry.target
                                );

                            }

                        }
                    );

                },

                {
                    threshold: .12
                }

            );


        cards.forEach(
            card => {

                observer.observe(
                    card
                );

            }
        );

    </script>

</body>
</html>