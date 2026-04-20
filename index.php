<!DOCTYPE html>
<html>
<head>
    <title>Campus Event System</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Center full page */
        body, html {
            height: 100%;
            margin: 0;
        }

        .center-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            animation: fadeIn 2s ease-in;
        }

        /* Extra animation */
        h1 {
            font-size: 45px;
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 0 0 10px cyan; }
            to { text-shadow: 0 0 30px magenta; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>

<div class="center full-center">
    <h1>🌙 Campus Event System</h1>
    <p>✨ Explore • Register • Enjoy ✨</p>

    <nav>
        <a href="events.php">Events</a>
        <a href="login.php">Admin</a>
    </nav>
</div>

</body>
</html>