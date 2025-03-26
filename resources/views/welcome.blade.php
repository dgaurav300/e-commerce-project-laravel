<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    
        <style>
           
            body{
                font-family: 'figtree', sans-serif;
                background-color: #f3f4f6;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            h1{
                text-align: center;
                font-size: 3rem;
                margin-top: 10%;
                color: #333;
            }
            .container{
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 10%;
            }
            .login_btn{
                margin-right: 10px;
            }
            .login_btn a{
                text-decoration: none;
                /* primary background color */
                background-color: blue  ;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
            }
            .register_btn a{
                text-decoration: none;
                background-color: green;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
      
     <h1>E- Commerce Website</h1>

       <div class="container">
        <div class="login_btn">
            <a href="login">Login</a>
        </div>
        <div class="register_btn">
            <a href="register" class="btn btn-primary">Register</a>
        </div>

       </div>
    </body>
</html>
