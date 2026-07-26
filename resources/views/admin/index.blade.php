@include('common.header')
<!DOCTYPE html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <style>
        .success{
            background: lightgreen;
            color: green;
            padding: 3px 10px;
            border-radius: 20px;
            display: inline-block;
            margin: 5px;
            
        }

        .error{
            background: #e87e7e;
            color: #ed0b0b;
            padding: 3px 10px;
            border-radius: 20px;
            display: inline-block;
            margin: 5px;
            
        }

        .warning{
            background: #ecc467;
            color: #d17907;
            padding: 3px 10px;
            border-radius: 20px;
            display: inline-block;
            margin: 5px;
            
        }
    </style>
</head>
<body>
    
    <h1>{{ $content }}</h1>
    <h2> {{ $content2 }} </h2>
    <x-message-banner msg="User Login Successful" class="success" />
    <x-message-banner msg="User Login Failed" class="error" />
    <x-message-banner msg="Something Went Wrong!" class="warning" />
</body>
</html>
@include('common.footer',['page'=>"View from Index Page."])