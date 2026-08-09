<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <style>
        body {
            margin: 0;
            padding: 30px;
            background: #f6f482;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        h1 {
            color: #350878;
        }

        p {
            color: #08a49f;
            font-size: 22px;
            border-top: 1px solid black;
            padding-top: 10px;
        }

        a {
            display: inline-block;
            margin: 5px 10px;
            font-size: 14px;
            font-family: sans-serif;
            color: #bd33d0;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            color: #7a168a;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h1>Welcome to the Laravel Home Page.</h1>
    
    <p>{{ $content }}</p>

    <div>
        <a href="{{ route('user-form') }}">User Form Page</a><br><br>

        <a href="{{ route('student_login') }}">Student Login</a><br>

        <a href="{{ route('master_login') }}">Master Login</a>
    </div>

</body>
</html>