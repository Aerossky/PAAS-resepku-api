<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resepku | Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1 class="text-center">Dashboard Halo {{ $user->name }}</h1>
    <h1 class="text-center">API KEY MU {{ $apikey->api_key }}</h1>
</body>

</html>
