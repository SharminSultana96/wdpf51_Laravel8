<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yeild('title')</title>
    <link rel="stylesheet" href="style.css">
    @stack('styles')
</head>
<body>
    
    @stack('scripts')

    @section('body')
        <h1>Body Header</h1>
    @show
</body>
</html>