<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $city['name'] }} | Malaysia Culture</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0b1723] text-white p-10">

    <a href="{{ route('malaysia.index') }}" class="inline-block px-4 py-2 bg-white/10 rounded-full text-sm hover:bg-white/20 transition mb-4">
        ← Kembali ke Malaysia
    </a>

    <!-- Header Kota & Widget Cuaca Real-time -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center my-8 bg-[#122334] p-6 rounded-2xl border border-white/5">
        <div>
            <span class="text-xs text-amber-400 font-semibold uppercase">Negeri {{ $city['state'] }}</span>
            <h1 class="text-4xl font-serif font-bold mt-1">{{ $city['name'] }}</h1>
        </div>
        
        <!-- Box Cuaca Real-time -->
        @if(isset($city['coordinates']))
        <div class="mt-4 md:mt-0 bg-[#0b1723] px-5 py-3 rounded-xl border border-white/10 flex items-center gap-4">
            <div class="text-2xl">🌤️</div>
            <div>
                <div class="text-xs text-gray-400">Cuaca Saat Ini</div>
                <div id="weather" class="text-xl font-bold text-amber-400">Memuat...</div>
                <div id="weatherNote" class="text-[10px] text-gray-500"></div>
            </div>
        </div>
        @endif
    </div>

    <!-- Deskripsi & Kebudayaan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
        <div class="bg-[#122334] p-6 rounded-xl border border-white/5">
            <h3 class="text-xl font-bold mb-3 text-amber-400">Penjelasan Kota</h3>
            <p class="text-gray-300 text-sm leading-relaxed">{{ $city['description'] ?? 'Penjelasan belum tersedia.' }}</p>
        </div>
        <div class="bg-[#122334] p-6 rounded-xl border border-white/5">
            <h3 class="text-xl font-bold mb-3 text-amber-400">Keberagaman & Kebudayaan</h3>
            <p class="text-gray-300 text-sm leading-relaxed">{{ $city['diversity_culture'] ?? 'Informasi kebudayaan belum tersedia.' }}</p>
        </div>
    </div>

    <!-- Sejarah Kota -->
    @if(isset($city['history']))
    <div class="bg-[#122334] p-6 rounded-xl border border-white/5 my-8">
        <h3 class="text-xl font-bold mb-3 text-amber-400">Sejarah Kota</h3>
        <p class="text-gray-300 text-sm leading-relaxed">{{ $city['history'] }}</p>
    </div>
    @endif

    <!-- Section Tabel Daftar Pemimpin Kota -->
    @if(isset($city['leaders']))
    <div class="bg-[#122334] p-6 rounded-2xl border border-white/5 my-8">
        <h3 class="text-2xl font-serif font-bold mb-6 text-amber-400">Daftar Pemimpin Kota</h3>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/10 text-amber-400 font-bold">
                        <th class="py-4 px-4 w-1/3">Masa Jabatan</th>
                        <th class="py-4 px-4 w-2/3">Nama Pemimpin</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @foreach($city['leaders'] as $leader)
                        <tr class="hover:bg-white/5 transition">
                            <td class="py-4 px-4 text-gray-300 font-medium">{{ $leader['period'] }}</td>
                            <td class="py-4 px-4 text-white font-semibold">{{ $leader['name'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

    <!-- Pakaian, Wisata, dan Kuliner Khas (Versi Tanda/Card Tanpa Gambar) -->
    @php
        $currentSlug = $slug ?? Str::slug($city['name']);
        
        $firstClothing   = $city['clothing_list'][0] ?? null;
        $firstAttraction = $city['attractions_list'][0] ?? null;
        $firstCulinary   = $city['culinary_list'][0] ?? null;
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
        <!-- Card Pakaian Adat -->
        <a href="{{ route('malaysia.cities.costumes', $currentSlug) }}" class="block bg-[#122334] p-6 rounded-2xl border border-white/5 hover:border-amber-400/50 hover:bg-[#162a3f] transition group">
            <div class="flex items-center justify-between mb-2">
                <h4 class="font-bold text-amber-400 text-lg">Pakaian Adat</h4>
                <span class="text-amber-400 group-hover:translate-x-1 transition-transform">→</span>
            </div>
            <h5 class="font-semibold text-white text-base mb-2">{{ $firstClothing['title'] ?? 'Daftar Pakaian Adat' }}</h5>
            <p class="text-sm text-gray-300 leading-relaxed line-clamp-3">{{ $firstClothing['description'] ?? 'Klik untuk melihat daftar ragam pakaian adat daerah ini.' }}</p>
        </a>

        <!-- Card Wisata Khas -->
        <a href="{{ route('malaysia.cities.attractions', $currentSlug) }}" class="block bg-[#122334] p-6 rounded-2xl border border-white/5 hover:border-amber-400/50 hover:bg-[#162a3f] transition group">
            <div class="flex items-center justify-between mb-2">
                <h4 class="font-bold text-amber-400 text-lg">Wisata Khas</h4>
                <span class="text-amber-400 group-hover:translate-x-1 transition-transform">→</span>
            </div>
            <h5 class="font-semibold text-white text-base mb-2">{{ $firstAttraction['title'] ?? 'Daftar Wisata Khas' }}</h5>
            <p class="text-sm text-gray-300 leading-relaxed line-clamp-3">{{ $firstAttraction['description'] ?? 'Klik untuk melihat daftar destinasi wisata khas daerah ini.' }}</p>
        </a>

        <!-- Card Kuliner Khas -->
        <a href="{{ route('malaysia.cities.culinary', $currentSlug) }}" class="block bg-[#122334] p-6 rounded-2xl border border-white/5 hover:border-amber-400/50 hover:bg-[#162a3f] transition group">
            <div class="flex items-center justify-between mb-2">
                <h4 class="font-bold text-amber-400 text-lg">Kuliner Khas</h4>
                <span class="text-amber-400 group-hover:translate-x-1 transition-transform">→</span>
            </div>
            <h5 class="font-semibold text-white text-base mb-2">{{ $firstCulinary['title'] ?? 'Daftar Kuliner Khas' }}</h5>
            <p class="text-sm text-gray-300 leading-relaxed line-clamp-3">{{ $firstCulinary['description'] ?? 'Klik untuk melihat daftar sajian kuliner khas daerah ini.' }}</p>
        </a>
    </div>

    <!-- Script Open-Meteo API Weather -->
    @if(isset($city['coordinates']))
    <script>
        fetch('https://api.open-meteo.com/v1/forecast?latitude={{ $city['coordinates'][0] }}&longitude={{ $city['coordinates'][1] }}&current=temperature_2m&timezone=auto')
            .then(r => r.json())
            .then(d => {
                document.getElementById('weather').textContent = d.current.temperature_2m + '°C';
                document.getElementById('weatherNote').textContent = 'Diperbarui: ' + d.current.time;
            })
            .catch(() => document.getElementById('weather').textContent = 'Tidak tersedia');
    </script>
    @endif

</body>
</html>