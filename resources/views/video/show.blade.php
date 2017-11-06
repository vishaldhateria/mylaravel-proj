<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/uikit.css">

        
    </head>
    <body>
    <ul>
   @foreach ($tasks as $task)
    <li>
   {{ $task->title }}</li>
        @endforeach
        </ul>

        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title">Default</h3>
    <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
        <script src="../../assets/js/uikit.min.js"></script>
        <script src="../../assets/js/uikit-icons.min.js"></script>       
    </body>
</html>
