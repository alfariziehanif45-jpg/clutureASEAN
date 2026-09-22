<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjelasan {{ $type }} | {{ $city['name'] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #071922; color: #fff; font-family: Poppins, sans-serif; }
        .hero { min-height: 35vh; padding: 34px 8%; display: flex; align-items: flex-end; background: linear-gradient(120deg, #072332e8, #a10f1680); position: relative; }
        .back { position: absolute; top: 28px; color: #fff; text-decoration: none; font-size: 0.95rem; }
        .back:hover { text-decoration: underline; }
        .hero h1 { font: 800 clamp(36px, 6vw, 70px) 'Playfair Display', serif; margin: 0; }
        .content { max-width: 900px; margin: auto; padding: 50px 7%; display: flex; flex-direction: column; gap: 20px; }
        .card { padding: 27px; border-radius: 20px; background: #0d2937; border: 1px solid #ffffff18; }
        .card h2 { font-family: 'Playfair Display', serif; margin-top: 0; color: #f2c14e; font-size: 1.8rem; }
        .card p { color: #c2d1d7; line-height: 1.8; margin: 0; }
        
        /* Item Box: Gambar Kiri, Deskripsi Kanan */
        .item-box { 
            padding: 24px 0; 
            border-bottom: 1px solid #ffffff18; 
            display: flex; 
            gap: 24px; 
            align-items: center; 
        }
        .item-box:last-child { border-bottom: none; }
        
        .item-image { 
            width: 200px; 
            height: 140px; 
            flex-shrink: 0; 
            border-radius: 12px; 
            overflow: hidden; 
            border: 1px solid #ffffff20; 
            background: #071922;
        }
        .item-image img { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            display: block; 
        }
        
        .item-info { flex: 1; }
        .item-info h3 { margin: 0 0 10px; color: #f2c14e; font-size: 1.25rem; font-family: 'Playfair Display', serif; }

        /* Responsif Seluler */
        @media (max-width: 640px) {
            .item-box { flex-direction: column; align-items: flex-start; gap: 16px; }
            .item-image { width: 100%; height: 200px; }
        }
    </style>
</head>
<body>
    <header class="hero">
        <a class="back" href="javascript:history.back()">← Kembali ke {{ $city['name'] }}</a>
        <div>
            <p style="margin: 0 0 4px; color: #f2c14e; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Eksplorasi {{ $type }}</p>
            <h1>{{ $city['name'] }}</h1>
        </div>
    </header>

    <main class="content">
        <article class="card">
            <h2>{{ $detail['title'] ?? 'Penjelasan '.$type }}</h2>
            
            @if(isset($detail['items']) && count($detail['items']) > 0)
                @foreach($detail['items'] as $item)
                    <div class="item-box">
                        <div class="item-image">
                            <img src="{{ asset($item['image'] ?? $image ?? 'images/default.jpg') }}" alt="{{ $item['name'] }}">
                        </div>
                        <div class="item-info">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Data belum tersedia.</p>
            @endif
        </article>
    </main>
</body>
</html>