<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Eindopdracht</title>
</head>
<body class="bg-gradient-to-r from-gray-800 via-purple-700 to-indigo-900 animate-gradient-move">

<x-loginauth></x-loginauth>

<div class="container mx-auto p-8">
    {{ $slot }}
</div>

</body>
</html>
