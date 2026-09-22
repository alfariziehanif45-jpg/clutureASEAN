<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $region['name'] }} | Indonesia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #071922; color: #fff; font-family: Poppins, sans-serif; }
        .hero { min-height: 48vh; padding: 34px 8%; display: flex; align-items: end; background: linear-gradient(120deg, #072332e8, #a10f1680), url('/images/flags/indonesia-flag.png') center/cover; position: relative; }
        .back { position: absolute; top: 28px; color: #fff; text-decoration: none; }
        .hero h1 { font: 800 clamp(52px, 9vw, 110px) 'Playfair Display', serif; margin: 0; }
        .content { max-width: 1000px; margin: auto; padding: 65px 7%; display: flex; flex-direction: column; gap: 24px; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .card { padding: 27px; border-radius: 20px; background: #0d2937; border: 1px solid #ffffff18; }
        .card h2 { font-family: 'Playfair Display', serif; margin-top: 0; }
        .card p { color: #c2d1d7; line-height: 1.85; margin-bottom: 0; }
        
        /* Style Link Card Kota & Galeri */
        .card-link { text-decoration: none; color: inherit; display: block; }
        .city-card { transition: transform 0.2s ease, border-color 0.2s ease; height: 100%; }
        .city-card:hover { transform: translateY(-5px); border-color: #f2c14e80; }
        .city-card h3 { margin: 0 0 8px; font-size: 20px; color: #f2c14e; font-family: 'Playfair Display', serif; }

        @media(max-width: 768px) {
            .grid, .grid-3 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header class="hero">
        <a class="back" href="{{ route('countries.indonesia') }}">← Indonesia</a>
        <div>
            <p>Wilayah Indonesia</p>
            <h1>{{ $region['name'] }}</h1>
            @if(isset($region['tagline']))
                <p>{{ $region['tagline'] }}</p>
            @endif
        </div>
    </header>

    <main class="content">
        <!-- Deskripsi Wilayah -->
        @if(isset($region['description']))
            <article class="card">
                <h2>Tentang Wilayah</h2>
                <p>{{ $region['description'] }}</p>
            </article>
        @endif

        <!-- Daftar Kota di Wilayah Ini -->
        @if(isset($region['cities']) && count($region['cities']) > 0)
            <section>
                <h2 style="font-family: 'Playfair Display', serif; color: #f2c14e; margin-bottom: 20px;">Kota & Kabupaten</h2>
                <div class="grid-3">
                    @foreach($region['cities'] as $citySlug => $cityData)
                        <a href="{{ route('cities.show', $citySlug) }}" class="card-link">
                            <article class="card city-card">
                                <h3>{{ $cityData['name'] ?? $citySlug }} &rarr;</h3>
                                <p>{{ $cityData['tagline'] ?? 'Jelajahi keindahan dan kebudayaan daerah ini.' }}</p>
                            </article>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </main>
</body>
</html>