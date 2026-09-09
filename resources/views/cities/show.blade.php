<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $city['name'] }} | Indonesia</title>
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
        
        /* Style Gambar & Card Link */
        .card-link { text-decoration: none; color: inherit; display: block; }
        .image-card { overflow: hidden; transition: transform 0.2s ease, border-color 0.2s ease; height: 100%; }
        .image-card:hover { transform: translateY(-5px); border-color: #f2c14e80; }
        .image-card img { width: 100%; height: 200px; object-fit: cover; border-radius: 12px; margin-bottom: 12px; }
        .image-card h3 { margin: 0 0 6px; font-size: 18px; color: #f2c14e; }

        /* Style Tabel Pemimpin */
        .table-leaders { width: 100%; border-collapse: collapse; margin-top: 10px; color: #c2d1d7; }
        .table-leaders th, .table-leaders td { padding: 12px; text-align: left; border-bottom: 1px solid #ffffff18; }
        .table-leaders th { color: #f2c14e; font-family: 'Playfair Display', serif; }

        .weather { padding: 25px; border-radius: 20px; background: #123b4d; }
        .weather strong { color: #f2c14e; font-size: 28px; display: block; margin-top: 5px; }

        @media(max-width: 768px) {
            .grid, .grid-3 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header class="hero">
        <a class="back" href="{{ route('countries.indonesia') }}">← Indonesia</a>
        <div>
            <p>Jelajahi Keberagaman</p>
            <h1>{{ $city['name'] }}</h1>
            <p>{{ $city['tagline'] }}</p>
        </div>
    </header>

    <main class="content">
        <!-- Penjelasan Kota -->
        @if(isset($city['description']))
            <article class="card">
                <h2>Penjelasan Kota</h2>
                <p>{{ $city['description'] }}</p>
            </article>
        @endif

        <!-- Kebudayaan & Keberagaman -->
        <div class="grid">
            <article class="card">
                <h2>Kebudayaan</h2>
                <p>{{ $city['culture'] }}</p>
            </article>
            <article class="card">
                <h2>Keberagaman</h2>
                <p>{{ $city['diversity'] }}</p>
            </article>
        </div>

        <!-- Sejarah -->
        @if(isset($city['history']))
            <article class="card">
                <h2>Sejarah Kota</h2>
                <p>{{ $city['history'] }}</p>
            </article>
        @endif

        <!-- Galeri Gambar dengan Navigasi Halaman Detail -->
        @if(isset($city['images']))
            <div class="grid-3">
                <a href="{{ route('cities.costumes', $slug) }}" class="card-link">
                    <article class="card image-card">
                        <img src="{{ asset($city['images']['costume']) }}" alt="Pakaian Adat">
                        <h3>Pakaian Adat &rarr;</h3>
                        <p>Busana adat khas daerah dengan ornaments tradisional.</p>
                    </article>
                </a>

                <a href="{{ route('cities.attractions', $slug) }}" class="card-link">
                    <article class="card image-card">
                        <img src="{{ asset($city['images']['tourism']) }}" alt="Wisata Khas">
                        <h3>Wisata Khas &rarr;</h3>
                        <p>Ikon destinasi wisata legendaris.</p>
                    </article>
                </a>

                <a href="{{ route('cities.culinary', $slug) }}" class="card-link">
                    <article class="card image-card">
                        <img src="{{ asset($city['images']['food']) }}" alt="Kuliner Khas">
                        <h3>Kuliner Khas &rarr;</h3>
                        <p>Sajian kuliner khas penuh cita rasa.</p>
                    </article>
                </a>
            </div>
        @endif

        <!-- Pemimpin Kota -->
        @if(isset($city['leaders']))
            <article class="card">
                <h2>Daftar Pemimpin Kota</h2>
                <table class="table-leaders">
                    <thead>
                        <tr>
                            <th>Masa Jabatan</th>
                            <th>Nama Pemimpin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($city['leaders'] as $leader)
                            <tr>
                                <td>{{ $leader['period'] }}</td>
                                <td>{{ $leader['name'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>
        @endif

        <!-- Cuaca -->
        <section class="weather">
            <span>Cuaca saat ini · diperbarui otomatis</span>
            <strong id="weather">Memuat…</strong>
            <p id="weatherNote">Mengambil data cuaca lokal.</p>
        </section>
    </main>

    <script>
        fetch('https://api.open-meteo.com/v1/forecast?latitude={{ $city['coordinates'][0] }}&longitude={{ $city['coordinates'][1] }}&current=temperature_2m,weather_code&timezone=auto')
            .then(r => r.json())
            .then(d => {
                document.getElementById('weather').textContent = d.current.temperature_2m + '°C';
                document.getElementById('weatherNote').textContent = 'Diperbarui: ' + d.current.time + ' · Sumber Open-Meteo.';
            })
            .catch(() => document.getElementById('weather').textContent = 'Tidak tersedia');
    </script>
</body>
</html>