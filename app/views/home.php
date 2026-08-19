<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body {
            background: #ece6f7;
            min-height: 100vh;
            display: flex;
        }
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
        .sidebar a:hover:not(.active) { background: #efe9f7; }

        .main {
            flex: 1;
            padding: 40px 50px;
            min-width: 0;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }
        .top-bar h1 { color: #4a3d63; font-size: 26px; }
        .top-bar p { color: #8a7fa3; font-size: 14px; margin-top: 4px; }
        .badge {
            background: #ffffff;
            color: #4a3d63;
            padding: 8px 18px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(120, 90, 150, 0.08);
            white-space: nowrap;
        }

        .stat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }
        .stat-box {
            border-radius: 18px;
            padding: 20px 22px;
            color: #fff;
            min-width: 0;
        }
        .stat-box.pink { background: #e6889a; }
        .stat-box.teal { background: #5bc2b0; }
        .stat-box.amber { background: #eab86a; }
        .stat-box .stat-number { font-size: 22px; font-weight: 700; word-break: break-word; }
        .stat-box .stat-label { font-size: 13px; opacity: 0.9; margin-top: 4px; }

        .cards-row {
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 20px;
        }
        .panel {
            background: #ffffff;
            border-radius: 20px;
            padding: 24px 28px;
            box-shadow: 0 4px 20px rgba(120, 90, 150, 0.08);
            min-width: 0;
        }
        .panel h2 { color: #4a3d63; font-size: 16px; margin-bottom: 16px; }
        .list-item {
            display: grid;
            grid-template-columns: 90px 1fr;
            gap: 12px;
            align-items: start;
            padding: 10px 0;
            border-bottom: 1px solid #f0ecf7;
            font-size: 14px;
        }
        .list-item:last-child { border-bottom: none; }
        .list-item .item-title { color: #4a3d63; font-weight: 500; }
        .list-item .item-sub { color: #8a7fa3; font-size: 12px; text-align: right; }

        .welcome-box {
            background: #9b7fd4;
            border-radius: 20px;
            padding: 26px 28px;
            color: #fff;
            min-width: 0;
        }
        .welcome-box h2 { font-size: 18px; margin-bottom: 8px; }
        .welcome-box p { font-size: 13px; opacity: 0.9; line-height: 1.6; margin-bottom: 16px; }
        .welcome-box a {
            display: inline-block;
            background: #fff;
            color: #7a5cb8;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
        }

        @media (max-width: 900px) {
            .stat-grid { grid-template-columns: repeat(2, 1fr); }
            .cards-row { grid-template-columns: 1fr; }
        }
        @media (max-width: 700px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; padding: 20px; }
            .main { padding: 24px; }
            .stat-grid { grid-template-columns: 1fr; }
            .top-bar { flex-direction: column; align-items: flex-start; }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="avatar-circle">KC</div>
        <div class="sidebar-name">Kathleen M. Cansino</div>
        <a href="<?= site_url('student'); ?>" class="active">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </div>

    <div class="main">
        <div class="top-bar">
            <div>
                <h1>Welcome back, Kathleen!</h1>
                <p>Here's a quick overview of your student portal</p>
            </div>
            <div class="badge">BSIT - F1</div>
        </div>

        <div class="stat-grid">
            <div class="stat-box pink">
                <div class="stat-number">3rd Year</div>
                <div class="stat-label">Current level</div>
            </div>
            <div class="stat-box teal">
                <div class="stat-number">MCC2024-00041</div>
                <div class="stat-label">Student ID</div>
            </div>
            <div class="stat-box amber">
                <div class="stat-number">2</div>
                <div class="stat-label">Active pages</div>
            </div>
        </div>

        <div class="cards-row">
            <div class="panel">
                <h2>Quick info</h2>
                <div class="list-item">
                    <span class="item-title">Course</span>
                    <span class="item-sub">BS Information Technology</span>
                </div>
                <div class="list-item">
                    <span class="item-title">Section</span>
                    <span class="item-sub">F1</span>
                </div>
                <div class="list-item">
                    <span class="item-title">Skills</span>
                    <span class="item-sub">Web development, cooking</span>
                </div>
                <div class="list-item">
                    <span class="item-title">Hobbies</span>
                    <span class="item-sub">Watching, reading, coffee</span>
                </div>
            </div>

            <div class="welcome-box">
                <h2>View full profile</h2>
                <p>See your complete student information including contact details, address, and a short bio.</p>
                <a href="<?= site_url('student/profile'); ?>">Go to profile →</a>
            </div>
        </div>
    </div>
</body>
</html>