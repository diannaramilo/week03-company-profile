<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $company['name'] ?? 'NovaTech Solutions') | Company Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#1C1730',
                        paper: '#FBF8F4',
                        violet: '#5B3DF5',
                        violetdeep: '#4529D1',
                        coral: '#FF6B57',
                        mint: '#22C1A0',
                        amber: '#FFB627',
                        slate: '#6E6680',
                    },
                    fontFamily: {
                        display: ['Fraunces', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #FBF8F4; }
        .eyebrow { font-family: 'IBM Plex Mono', monospace; letter-spacing: 0.12em; text-transform: uppercase; }
        .blob {
            position: absolute;
            border-radius: 999px;
            filter: blur(70px);
            opacity: 0.55;
            z-index: 0;
        }
    </style>
</head>
<body class="bg-paper text-ink antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>