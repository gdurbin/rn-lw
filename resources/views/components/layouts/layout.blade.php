<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/app.css">
    @vite("resources/css/app.css")
    <title>RadiantNerd</title>
</head>
<body class="min-h-svh flex flex-col items-center mx-4 text-dark dark:text-light bg-light dark:bg-dark">
    <x-layouts.header />

    <main class="w-full max-w-screen-xl flex flex-col grow">
        {{ $slot }}
    </main>

    <x-layouts.footer />
</body>
</html>
