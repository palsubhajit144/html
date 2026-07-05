<!DOCTYPE html>
<html>
<head>
    <!-- <title>{{ $title ?? 'My Website' }}</title> -->

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background: #2c3e50;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 16px;
        }

        .nav a:hover {
            color: #1abc9c;
        }
    </style>
</head>

<div class="header">
    <div class="logo">MySite</div>

    <div class="nav">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </div>
</div>