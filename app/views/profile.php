<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

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

        .avatar-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #9b7fd4;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            font-weight: bold;
            margin: 0 auto 10px auto;
        }

        .sidebar-name {
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
            background: #ffffff;
            color: #4a3d63;
            box-shadow: 0 2px 8px rgba(120, 90, 150, 0.1);
        }

        .sidebar a:hover {
            background: #efe9f7;
        }

        /* LOGOUT BUTTON */
        .logout-link {
            margin-top: 25px;
            background: #e6889a !important;
            color: #ffffff !important;
            text-align: center;
        }

        .logout-link:hover {
            background: #d9778b !important;
        }

        /* MAIN */
        .main {
            flex: 1;
            padding: 40px 50px;
            min-width: 0;
        }

        h1 {
            color: #4a3d63;
            font-size: 26px;
            margin-bottom: 24px;
        }

        /* CONTENT */
        .content-grid {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }

        .info-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 28px 32px;
            box-shadow: 0 4px 20px rgba(120, 90, 150, 0.08);
            flex: 1;
            min-width: 280px;
        }

        .info-card h2 {
            color: #4a3d63;
            font-size: 16px;
            margin-bottom: 16px;
        }

        .info-row {
            display: grid;
            grid-template-columns: 100px 1fr;
            gap: 12px;
            align-items: start;
            padding: 8px 0;
            border-bottom: 1px solid #f0ecf7;
            font-size: 14px;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-row span:first-child {
            color: #8a7fa3;
            font-weight: 600;
        }

        .info-row span:last-child {
            color: #4a3d63;
            text-align: right;
            word-break: break-word;
        }

        /* STATS */
        .stats {
            display: flex;
            gap: 16px;
            flex-direction: column;
            min-width: 180px;
            flex: 0 0 auto;
        }

        .stat-circle {
            background: #ffffff;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(120, 90, 150, 0.08);
        }

        .stat-circle svg {
            width: 80px;
            height: 80px;
        }

        .stat-label {
            margin-top: 8px;
            color: #4a3d63;
            font-size: 13px;
            font-weight: 600;
        }

        /* DESCRIPTION */
        .description-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 24px 32px;
            margin-top: 24px;
            box-shadow: 0 4px 20px rgba(120, 90, 150, 0.08);
            color: #4a3d63;
            font-size: 14px;
            line-height: 1.6;
        }

        .description-box strong {
            color: #9b7fd4;
        }

        /* SOCIAL MEDIA */
        .social-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 24px 32px;
            margin-top: 24px;
            box-shadow: 0 4px 20px rgba(120, 90, 150, 0.08);
        }

        .social-box h2 {
            color: #4a3d63;
            font-size: 16px;
            margin-bottom: 16px;
        }

        .social-links {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            background: #f7f4fb;
            color: #4a3d63;
            padding: 10px 16px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 500;
        }

        .social-links a:hover {
            background: #efe9f7;
        }

        .social-links .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .dot.fb {
            background: #5b8def;
        }

        .dot.ig {
            background: #e6889a;
        }

        .dot.gh {
            background: #4a3d63;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .content-grid {
                flex-direction: column;
            }

            .stats {
                flex-direction: row;
                width: 100%;
            }

            .stat-circle {
                flex: 1;
            }
        }

        @media (max-width: 700px) {

            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 20px;
            }

            .main {
                padding: 24px;
            }

            .info-card {
                padding: 20px;
            }

            .info-row {
                grid-template-columns: 80px 1fr;
                font-size: 13px;
            }

            .stats {
                flex-direction: column;
            }

            .social-links {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="avatar-circle">
            KC
        </div>

        <div class="sidebar-name">
            <?= $name; ?>
        </div>

        <!-- PUBLIC HOME -->
        <a href="<?= site_url('student'); ?>">
            Home
        </a>

        <!-- CURRENT PAGE -->
        <a href="<?= site_url('student/profile'); ?>" class="active">
            Student Profile
        </a>

        <!-- LOGOUT -->
        <a href="<?= site_url('student/logout'); ?>" class="logout-link">
            Logout
        </a>

    </div>


    <!-- MAIN CONTENT -->
    <div class="main">

        <h1>
            Student Information
        </h1>


        <!-- INFORMATION + STATS -->
        <div class="content-grid">

            <!-- BASIC INFORMATION -->
            <div class="info-card">

                <h2>
                    Basic Information
                </h2>

                <div class="info-row">
                    <span>Student ID</span>
                    <span><?= $student_id; ?></span>
                </div>

                <div class="info-row">
                    <span>Name</span>
                    <span><?= $name; ?></span>
                </div>

                <div class="info-row">
                    <span>Course</span>
                    <span><?= $course; ?></span>
                </div>

                <div class="info-row">
                    <span>Year Level</span>
                    <span><?= $year; ?></span>
                </div>

                <div class="info-row">
                    <span>Section</span>
                    <span><?= $section; ?></span>
                </div>

                <div class="info-row">
                    <span>Email</span>
                    <span><?= $email; ?></span>
                </div>

                <div class="info-row">
                    <span>Address</span>
                    <span><?= $address; ?></span>
                </div>

                <div class="info-row">
                    <span>Contact</span>
                    <span><?= $contact; ?></span>
                </div>

                <div class="info-row">
                    <span>Skills</span>
                    <span><?= $skills; ?></span>
                </div>

                <div class="info-row">
                    <span>Hobbies</span>
                    <span><?= $hobbies; ?></span>
                </div>

            </div>


            <!-- STATS -->
            <div class="stats">

                <div class="stat-circle">

                    <svg viewBox="0 0 36 36">

                        <path
                            d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                            fill="none"
                            stroke="#f0ecf7"
                            stroke-width="3"
                        />

                        <path
                            d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831"
                            fill="none"
                            stroke="#e6889a"
                            stroke-width="3"
                            stroke-dasharray="90, 100"
                        />

                    </svg>

                    <div class="stat-label">
                        Attendance 90%
                    </div>

                </div>


                <div class="stat-circle">

                    <svg viewBox="0 0 36 36">

                        <path
                            d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                            fill="none"
                            stroke="#f0ecf7"
                            stroke-width="3"
                        />

                        <path
                            d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831"
                            fill="none"
                            stroke="#5bc2b0"
                            stroke-width="3"
                            stroke-dasharray="85, 100"
                        />

                    </svg>

                    <div class="stat-label">
                        Academics 85%
                    </div>

                </div>

            </div>

        </div>


        <!-- ABOUT ME -->
        <div class="description-box">

            <strong>About Me:</strong>

            <?= $description; ?>

        </div>


        <!-- SOCIAL MEDIA -->
        <div class="social-box">

            <h2>
                Social Media
            </h2>

            <div class="social-links">

                <a
                    href="<?= $facebook; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span class="dot fb"></span>
                    Facebook
                </a>


                <a
                    href="<?= $instagram; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span class="dot ig"></span>
                    Instagram
                </a>


                <a
                    href="<?= $github; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <span class="dot gh"></span>
                    GitHub
                </a>

            </div>

        </div>

    </div>

</body>
</html>