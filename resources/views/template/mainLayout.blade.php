<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space Grotesk:wght@300;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space Mono:wght@400&display=swap" />
</head>

<body>
    <div class="desktop-1">
        <div class="choose-your-velg">Choose Your VELG</div>
        <div class="frame">
            <div class="velg-chooser">VELG CHOOSER</div>
        </div>

        <div class="frame1-container">
            @yield('quiz')
        </div>
    </div>
</body>

</html>
