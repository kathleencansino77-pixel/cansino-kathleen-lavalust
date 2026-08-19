<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Portal</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #ece6f7;
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */

        .sidebar {
            width: 220px;
            background: #f7f4fb;
            padding: 30px 20px;
        }

        .logo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #9b7fd4;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 26px;
            font-weight: bold;

            margin: 0 auto 10px;
        }

        .portal-name {
            text-align: center;
            color: #4a3d63;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            text-decoration: none;
            color: #7a6f94;

            padding: 12px 14px;
            border-radius: 12px;
            margin-bottom: 8px;

            font-size: 14px;
            font-weight: 500;
        }

        .sidebar a.active {
            background: white;
            color: #4a3d63;

            box-shadow: 0 2px 8px rgba(120,90,150,0.1);
        }

        .sidebar a:hover {
            background: #efe9f7;
        }

        .login-button {
            margin-top: 25px;
            background: #9b7fd4 !important;
            color: white !important;
            text-align: center;
        }

        /* MAIN */

        .main {
            flex: 1;
            padding: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-card {
            width: 100%;
            max-width: 850px;

            background: white;
            border-radius: 25px;

            padding: 50px;

            box-shadow: 0 5px 25px rgba(120,90,150,0.1);
        }

        .welcome-card h1 {
            color: #4a3d63;
            font-size: 32px;
            margin-bottom: 12px;
        }

        .welcome-card p {
            color: #8a7fa3;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .welcome-card .button {
            display: inline-block;

            background: #9b7fd4;
            color: white;

            text-decoration: none;

            padding: 12px 22px;

            border-radius: 12px;

            font-size: 14px;
            font-weight: 600;
        }

        .welcome-card .button:hover {
            background: #876bc2;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;

            margin-top: 30px;
        }

        .feature {
            background: #f7f4fb;
            border-radius: 15px;
            padding: 20px;
        }

        .feature h3 {
            color: #4a3d63;
            font-size: 15px;
            margin-bottom: 7px;
        }

        .feature p {
            font-size: 12px;
            margin: 0;
        }

        @media(max-width:700px) {

            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .main {
                padding: 25px;
            }

            .welcome-card {
                padding: 30px;
            }

            .features {
                grid-template-columns: 1fr;
            }

        }

    </style>
</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">
            KC
        </div>

        <div class="portal-name">
           Kathleen Cansino
        </div>

        <a href="<?= site_url('student'); ?>" class="active">
            Home
        </a>

        <a href="<?= site_url('student/login'); ?>" class="login-button">
            Login
        </a>

    </div>


    <!-- MAIN -->

    <div class="main">

        <div class="welcome-card">

            <h1>
                Welcome to my Student Portal
            </h1>

            <p>
                Access my student profile and personal academic
                information through my student portal.
            </p>

            <a
                href="<?= site_url('student/login'); ?>"
                class="button"
            >
                Login to Student Portal →
            </a>


            <div class="features">

                <div class="feature">

                    <h3>
                       Kathleen's Profile
                    </h3>

                    <p>
                        View my personal student information.
                    </p>

                </div>


                <div class="feature">

                    <h3>
                        Academic Information
                    </h3>

                    <p>
                        Access your academic details.
                    </p>

                </div>


                <div class="feature">

                    <h3>
                        Secure Access
                    </h3>

                    <p>
                        Personal information is protected by login.
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>
</html>