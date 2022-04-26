<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            input{
                color: black;
                display: flex;
                position: relative;
            }
        </style>
    </head>
    <body class="">
    <h1>Orbiting around laravel</h1>
    <br>
    <h3>Holdings</h3>

    <form action="/h" method="post" >
        <label for="">
            ID:
        </label>
        <input type="number"><br><br>
        <label for="">
            TaxCD:
        </label>
        <input type="text"><br><br>
        <label for="">
            Owner:
        </label>
        <input type="text"><br><br>
        <label for="">
            Mobile:
        </label>
        <input type="text"><br><br>
        <label for="">
            NID:
        </label>
        <input type="text"><br><br>
        <label for="">
            Address:
        </label>
        <input type="text"><br><br>
        <label for="">
            Ward:
        </label>
        <input type="text"><br><br>
  

    <button class="btn btn-primary">Post</button>
    </form>

    </body>
</html>
