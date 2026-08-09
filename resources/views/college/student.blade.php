<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Login</title>

    {{-- Google Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        /* =========================================
           RESET
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================================
           BODY
        ========================================= */

        body {

            font-family: 'Poppins', sans-serif;

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 30px;

            background:
                linear-gradient(
                    120deg,
                    #5147e8 0%,
                    #6955e8 45%,
                    #bd62cf 100%
                );
        }


        /* =========================================
           MAIN CONTAINER
        ========================================= */

        .page-wrapper {

            width: 100%;

            max-width: 1260px;

            min-height: 710px;

            display: flex;

            background: #ffffff;

            overflow: hidden;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.18);
        }


        /* =========================================
           LEFT / WELCOME SECTION
        ========================================= */

        .welcome-section {

            position: relative;

            width: 62%;

            min-height: 710px;

            padding: 170px 80px 60px;

            overflow: hidden;

            color: #ffffff;

            background:
                linear-gradient(
                    135deg,
                    #7167e8 0%,
                    #8066df 35%,
                    #df67a9 100%
                );
        }


        .welcome-section::before {

            content: "";

            position: absolute;

            width: 350px;

            height: 350px;

            top: 70px;

            right: 40px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    rgba(255, 177, 77, 0.08),
                    rgba(255, 89, 149, 0.30)
                );
        }


        /* =========================================
           WELCOME CONTENT
        ========================================= */

        .welcome-content {

            position: relative;

            z-index: 10;

            max-width: 620px;
        }


        .welcome-content h1 {

            font-size: 56px;

            line-height: 1.15;

            font-weight: 600;

            margin-bottom: 12px;

            color: #ffffff;
        }


        .welcome-content p {

            max-width: 590px;

            font-size: 21px;

            line-height: 1.38;

            font-weight: 400;

            color: #ffffff;

            font-family: -webkit-body
        }


        /* =========================================
           DECORATIVE SHAPES
        ========================================= */

        .shape {

            position: absolute;

            border-radius: 50px;

            transform: rotate(-45deg);

            background:
                linear-gradient(
                    90deg,
                    #ffad65,
                    #f36ca7
                );

            opacity: 0.85;
        }


        .shape-1 {

            width: 280px;

            height: 75px;

            left: -65px;

            bottom: 65px;
        }


        .shape-2 {

            width: 220px;

            height: 70px;

            left: 260px;

            bottom: 20px;

            background:
                linear-gradient(
                    90deg,
                    #ffad65,
                    #df6db1
                );
        }


        .shape-3 {

            width: 220px;

            height: 70px;

            right: 75px;

            bottom: 80px;

            background:
                linear-gradient(
                    90deg,
                    #805ee0,
                    #ffab63
                );
        }


        .shape-4 {

            width: 180px;

            height: 65px;

            right: 300px;

            bottom: -10px;
        }


        /* =========================================
           DECORATIVE LINES
        ========================================= */

        .line {

            position: absolute;

            width: 150px;

            height: 8px;

            border-radius: 10px;

            transform: rotate(-45deg);

            background:
                linear-gradient(
                    90deg,
                    #ffad65,
                    #ef76a5
                );

            z-index: 5;
        }


        .line-1 {

            left: 75px;

            bottom: 115px;
        }


        .line-2 {

            left: 270px;

            bottom: 205px;
        }


        .line-3 {

            right: 40px;

            bottom: 105px;
        }


        .line-4 {

            width: 120px;

            left: 155px;

            bottom: 45px;

            opacity: 0.8;
        }


        .line-5 {

            width: 120px;

            right: 140px;

            bottom: 15px;

            opacity: 0.8;
        }


        /* =========================================
           RIGHT / LOGIN SECTION
        ========================================= */

        .login-section {

            width: 38%;

            min-height: 710px;

            display: flex;

            justify-content: center;

            align-items: center;

            background: #ffffff;
        }


        /* =========================================
           LOGIN BOX
        ========================================= */

        .login-box {

            width: 78%;

            max-width: 350px;
        }


        /* =========================================
           LOGIN TITLE
        ========================================= */

        .login-box h2 {

            text-align: center;

            color: #7166df;

            font-size: 24px;

            line-height: 1.2;

            font-weight: 600;

            margin-bottom: 38px;
        }


        /* =========================================
           INPUT GROUP
        ========================================= */

        .input-group {

            position: relative;

            width: 100%;

            margin-bottom: 20px;
        }


        .input-group input {

            width: 100%;

            height: 42px;

            border: none;

            outline: none;

            border-radius: 25px;

            padding: 0 20px 0 48px;

            background: #e9e6ff;

            color: #555555;

            font-family: 'Poppins', sans-serif;

            font-size: 13px;

            transition: 0.3s;
        }


        .input-group input:focus {

            background: #e3dfff;

            box-shadow:
                0 0 0 2px
                rgba(113, 102, 223, 0.12);
        }


        .input-group input::placeholder {

            color: #999999;
        }


        /* =========================================
           INPUT ICON
        ========================================= */

        .input-icon {

            position: absolute;

            left: 18px;

            top: 50%;

            transform: translateY(-50%);

            color: #796de2;

            font-size: 17px;

            z-index: 2;
        }


        /* =========================================
           LOGIN OPTIONS
        ========================================= */

        .login-options {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin: 8px 2px 32px;

            font-size: 12px;

            color: #aaaaaa;
        }


        .remember {

            display: flex;

            align-items: center;

            gap: 7px;

            cursor: pointer;
        }


        .remember input {

            width: 19px;

            height: 19px;

            margin: 0;

            cursor: pointer;

            accent-color: #7467e5;
        }


        .forgot {

            color: #aaaaaa;

            text-decoration: none;

            transition: 0.2s;
        }


        .forgot:hover {

            color: #7467e5;
        }

        .registration {
            text-decoration: none;
            font-size: 14px;
        }

        .registration:hover {
            text-decoration: underline;
        }


        /* =========================================
           LOGIN BUTTON
        ========================================= */

        .login-btn {

            display: block;

            width: 140px;

            height: 42px;

            margin: 0 auto;

            border: none;

            border-radius: 25px;

            color: #ffffff;

            font-family: 'Poppins', sans-serif;

            font-size: 14px;

            font-weight: 500;

            cursor: pointer;

            background:
                linear-gradient(
                    90deg,
                    #d85caf,
                    #7565e7
                );

            transition:
                transform 0.3s,
                box-shadow 0.3s;
        }


        .login-btn:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(117, 101, 231, 0.30);
        }


        .login-btn:active {

            transform: translateY(0);
        }


        /* =========================================
           RESPONSIVE - TABLET
        ========================================= */

        @media (max-width: 1000px) {

            body {
                padding: 20px;
            }

            .page-wrapper {
                min-height: 650px;
            }

            .welcome-section {

                min-height: 650px;

                padding:
                    130px
                    50px
                    50px;
            }

            .login-section {
                min-height: 650px;
            }

            .welcome-content h1 {
                font-size: 45px;
            }

            .welcome-content p {
                font-size: 18px;
            }
        }


        /* =========================================
           RESPONSIVE - MOBILE
        ========================================= */

        @media (max-width: 700px) {

            body {

                min-height: 100vh;

                padding: 20px;

                align-items: flex-start;
            }


            .page-wrapper {

                flex-direction: column;

                width: 100%;

                min-height: auto;
            }


            .welcome-section {

                width: 100%;

                min-height: 420px;

                padding:
                    70px
                    35px
                    50px;
            }


            .welcome-section::before {

                width: 250px;

                height: 250px;

                top: 50px;

                right: -80px;
            }


            .welcome-content h1 {

                font-size: 36px;

                line-height: 1.2;
            }


            .welcome-content p {

                font-size: 16px;

                line-height: 1.5;
            }


            .login-section {

                width: 100%;

                min-height: 450px;

                padding:
                    50px
                    20px;
            }


            .login-box {

                width: 90%;

                max-width: 380px;
            }


            .shape-1 {

                width: 200px;

                height: 60px;

                left: -70px;

                bottom: 30px;
            }


            .shape-2 {

                width: 160px;

                height: 55px;

                left: 130px;

                bottom: 10px;
            }


            .shape-3 {

                width: 170px;

                height: 55px;

                right: -50px;

                bottom: 45px;
            }


            .line-1 {

                left: 60px;

                bottom: 80px;
            }


            .line-2 {

                left: 180px;

                bottom: 120px;
            }


            .line-3 {

                right: -20px;

                bottom: 90px;
            }
        }


        /* =========================================
           VERY SMALL MOBILE
        ========================================= */

        @media (max-width: 400px) {

            body {
                padding: 10px;
            }


            .welcome-section {

                min-height: 380px;

                padding:
                    55px
                    25px
                    40px;
            }


            .welcome-content h1 {

                font-size: 30px;
            }


            .welcome-content p {

                font-size: 14px;
            }


            .login-section {

                min-height: 420px;

                padding:
                    40px
                    15px;
            }


            .login-box h2 {

                font-size: 21px;

                margin-bottom: 30px;
            }


            .login-options {

                font-size: 11px;
            }
        }

    </style>

</head>


<body>


<div class="page-wrapper">


    {{-- =========================================
         LEFT / WELCOME SECTION
    ========================================== --}}

    <div class="welcome-section">

        <div class="welcome-content">

            <h1>
                Welcome to website
            </h1>

            <p>
                This is a demo practice lab, where we have made a student's login portal.
                his portal is designed to provide students with a simple and user-friendly login experience.
                Students can use this portal to access their account and explore the available features.
                This project is created for learning and practicing web development using Laravel.
            </p>

        </div>


        {{-- Decorative shapes --}}

        <div class="shape shape-1"></div>

        <div class="shape shape-2"></div>

        <div class="shape shape-3"></div>

        <div class="shape shape-4"></div>


        {{-- Decorative lines --}}

        <div class="line line-1"></div>

        <div class="line line-2"></div>

        <div class="line line-3"></div>

        <div class="line line-4"></div>

        <div class="line line-5"></div>

    </div>


    {{-- =========================================
         RIGHT / STUDENT LOGIN
    ========================================== --}}

    <div class="login-section">

        <div class="login-box">

            <h2> STUDENT LOGIN </h2>

            <form action="#" method="POST" >

                @csrf

                {{-- Username --}}

                <div class="input-group">

                    <span class="input-icon">
                        👤
                    </span>

                    <input
                        type="text"
                        name="username"
                        placeholder="Username"
                        autocomplete="username"
                        required
                    >

                </div>


                {{-- Password --}}

                <div class="input-group">

                    <span class="input-icon">
                        🔒
                    </span>

                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        autocomplete="current-password"
                        required
                    >

                </div>


                {{-- Remember / Forgot --}}

                <div class="login-options">

                    <label class="remember">

                        <input type="checkbox" name="remember" >

                        <span>
                            Remember
                        </span>

                    </label>


                    <a
                        href="#"
                        class="forgot"
                    >
                        Forgot password?
                    </a>

                </div>


                {{-- Login Button --}}

                <button type="submit" class="login-btn" >
                    LOGIN
                </button>

                {{-- New Registration --}}
                <div>
                    <a href="{{ route('student_reg') }}" class="registration">New Registration</a>

                </div>

            </form>

        </div>

    </div>


</div>


</body>

</html>