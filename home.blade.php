<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        h1 {
            font-size: 3rem;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        nav {
            margin-top: 20px;
        }
        nav a {
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 20px;
            font-size: 1.2rem;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
        }
        nav a:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <h1>INI HOME</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</body>
</html>
