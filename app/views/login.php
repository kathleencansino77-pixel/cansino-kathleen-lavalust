<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Login</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            background: #ece6f7;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 380px;
            background: white;

            padding: 40px;

            border-radius: 22px;

            box-shadow: 0 5px 25px rgba(120,90,150,0.1);
        }

        h1 {
            text-align: center;
            color: #4a3d63;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #8a7fa3;
            font-size: 13px;
            margin-bottom: 25px;
        }

        label {
            display: block;
            color: #4a3d63;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 12px;

            border: 1px solid #e1dced;
            border-radius: 10px;

            outline: none;

            margin-bottom: 16px;
        }

        input:focus {
            border-color: #9b7fd4;
        }

        button {
            width: 100%;

            padding: 12px;

            border: none;
            border-radius: 10px;

            background: #9b7fd4;
            color: white;

            font-weight: 600;

            cursor: pointer;
        }

        button:hover {
            background: #876bc2;
        }

        .error {
            background: #fde8ed;
            color: #c75d72;

            padding: 10px;

            border-radius: 8px;

            font-size: 13px;

            margin-bottom: 15px;
        }

        .back {
            display: block;

            text-align: center;

            margin-top: 20px;

            color: #7a6f94;

            text-decoration: none;

            font-size: 13px;
        }

    </style>
</head>

<body>

    <div class="login-card">

        <h1>
            Student Login
        </h1>

        <p class="subtitle">
            Login to access my student profile
        </p>


        <?php if (isset($error)): ?>

            <div class="error">
                <?= $error; ?>
            </div>

        <?php endif; ?>


        <form
            method="POST"
            action="<?= site_url('student/authenticate'); ?>"
        >

            <label>
                Username
            </label>

            <input
                type="text"
                name="username"
                placeholder="Enter username"
                required
            >


            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                placeholder="Enter password"
                required
            >


            <button type="submit">
                Login
            </button>

        </form>


        <a
            href="<?= site_url('student'); ?>"
            class="back"
        >
            ← Back to Home
        </a>

    </div>

</body>
</html>