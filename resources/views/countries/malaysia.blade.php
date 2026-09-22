<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaysia | Culture Sea</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0b1723] text-white">

    <!-- Hero Section dengan Background Bendera Malaysia -->
    <div class="relative min-h-[500px] flex flex-col justify-between p-10 bg-cover bg-center bg-no-repeat" 
         style="background-image: url('{{ asset('images/countries/malaysia.jpg') }}');">
        
        <!-- Overlay Gelap / Gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0b1723]/95 via-[#0b1723]/80 to-[#0b1723]/40 z-0"></div>

        <!-- Tombol Kembali -->
        <div class="relative z-10">
            <a href="/" class="inline-block px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-sm hover:bg-white/20 transition">
                ← Kembali
            </a>
        </div>

        <!-- Judul & Deskripsi Utama -->
        <div class="relative z-10 my-8">
            <span class="text-xs font-bold uppercase tracking-widest text-amber-400">NEGARA MONARKI KONSTITUSIONAL</span>
            <h1 class="text-7xl font-serif font-bold mt-2">Malaysia</h1>
            <p class="text-gray-200 max-w-2xl mt-4 text-base leading-relaxed">
                Negara multikultural di Asia Tenggara yang terdiri dari 13 negeri dan 3 wilayah persekutuan, kaya akan perpaduan budaya Melayu, Tionghoa, India, serta etnis bumiputera di Sabah dan Sarawak.
            </p>
        </div>

        <!-- Stat Cards -->
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
            <div class="bg-[#122334]/90 backdrop-blur-md p-5 rounded-2xl border border-white/10">
                <h3 class="text-3xl font-bold text-amber-400">33.500.000+</h3>
                <p class="text-xs text-gray-300 mt-1">Populasi terbaru · World Bank</p>
            </div>
            <div class="bg-[#122334]/90 backdrop-blur-md p-5 rounded-2xl border border-white/10">
                <h3 class="text-3xl font-bold text-amber-400">13</h3>
                <p class="text-xs text-gray-300 mt-1">Negeri / Provinsi</p>
            </div>
            <div class="bg-[#122334]/90 backdrop-blur-md p-5 rounded-2xl border border-white/10">
                <h3 class="text-3xl font-bold text-amber-400">330.803 km²</h3>
                <p class="text-xs text-gray-300 mt-1">Luas Wilayah</p>
            </div>
            <div class="bg-[#122334]/90 backdrop-blur-md p-5 rounded-2xl border border-white/10">
                <h3 class="text-3xl font-bold text-amber-400">Kuala Lumpur</h3>
                <p class="text-xs text-gray-300 mt-1">Pusat Pemerintahan</p>
            </div>
        </div>
    </div>

    <!-- Section: Identitas Negara -->
    <div class="p-10 border-b border-white/5">
        <h2 class="text-4xl font-serif font-bold mb-4">Identitas Negara</h2>
        <p class="text-gray-300 max-w-4xl leading-relaxed">
            Malaysia beribu kota di Kuala Lumpur dengan Putrajaya sebagai pusat pemerintahan Persekutuan. Berbahasa resmi Bahasa Melayu dan menggunakan mata uang Ringgit Malaysia (MYR). Jalur Gemilang pada bendera melambangkan kedaulatan, perpaduan 13 negeri dan wilayah persekutuan, serta keagamaan.
        </p>
    </div>

    <!-- Section: Alam, Flora & Fauna -->
    <div class="p-10 border-b border-white/5">
        <h2 class="text-4xl font-serif font-bold mb-8">Alam, Flora & Fauna</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Bunga Raya -->
            <div class="bg-[#122334] p-6 rounded-2xl border border-white/5">
                <div class="text-3xl mb-3">🌺</div>
                <h3 class="text-xl font-bold mb-2">Bunga Raya</h3>
                <p class="text-sm text-gray-300 leading-relaxed">
                    Bunga kembang sepatu merah yang ditetapkan sebagai bunga nasional Malaysia, melambangkan keberanian dan perpaduan bangsa.
                </p>
            </div>

            <!-- Harimau Malaya -->
            <div class="bg-[#122334] p-6 rounded-2xl border border-white/5">
                <div class="text-3xl mb-3">🐅</div>
                <h3 class="text-xl font-bold mb-2">Harimau Malaya</h3>
                <p class="text-sm text-gray-300 leading-relaxed">
                    Subspesies harimau endemik di Semenanjung Malaysia yang menjadi lambang keberanian pada lambang negara Malaysia (Jatayu/Jata Negara).
                </p>
            </div>

            <!-- Burung Enggang Badak -->
            <div class="bg-[#122334] p-6 rounded-2xl border border-white/5">
                <div class="text-3xl mb-3">🦅</div>
                <h3 class="text-xl font-bold mb-2">Burung Enggang Badak</h3>
                <p class="text-sm text-gray-300 leading-relaxed">
                    Burung khas yang sangat dihormati di Sarawak (Bumi Kenyalang), melambangkan keagungan dan warisan alam hutan hujan tropis.
                </p>
            </div>
        </div>
    </div>

    <!-- Section: Geografi & Penduduk -->
    <div class="p-10 border-b border-white/5">
        <h2 class="text-4xl font-serif font-bold mb-4">Geografi & Penduduk</h2>
        <p class="text-gray-300 max-w-4xl leading-relaxed mb-3">
            Malaysia terbagi menjadi dua wilayah utama: Malaysia Barat (Semenanjung Malaysia) dan Malaysia Timur (Sabah & Sarawak di Pulau Borneo). Wilayahnya didominasi hutan hujan tropis tua, pegunungan, dan garis pantai yang panjang. Masyarakatnya multietnis yang terdiri dari Melayu, Tionghoa, India, Iban, Kadazan-Dusun, dan berbagai suku bumiputera lainnya.
        </p>
        <span class="inline-block text-xs text-emerald-400 font-medium">
            ● Populasi terbaru tersedia: 2025 · Sumber World Bank.
        </span>
    </div>

    <!-- Section: Wilayah & Kota di Malaysia -->
    <div class="p-10">
        <h2 class="text-4xl font-serif font-bold mb-2">Wilayah & Kota di Malaysia</h2>
        <p class="text-gray-400 mb-8">Pilih wilayah terlebih dahulu untuk melihat kota-kota utama, keberagaman masyarakat, dan kebudayaan yang hidup di dalamnya.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($data['states'] as $stateSlug => $state)
                <a href="{{ route('malaysia.region.show', $stateSlug) }}" class="block bg-[#122334] p-6 rounded-2xl border border-white/5 hover:border-amber-400/50 hover:scale-[1.01] transition duration-200">
                    <span class="text-xs uppercase tracking-wider text-rose-400 font-semibold">WILAYAH MALAYSIA</span>
                    <h3 class="text-2xl font-bold mt-1 mb-3 text-white">{{ $state['name'] }}</h3>
                    <p class="text-sm text-gray-300 leading-relaxed">{{ $state['description'] }}</p>
                </a>
            @endforeach
        </div>
    </div>

</body>
</html>