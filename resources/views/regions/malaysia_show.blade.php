<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $state['name'] }} | Malaysia Culture</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0b1723] text-white p-10">

    <a href="{{ route('malaysia.index') }}" class="inline-block px-4 py-2 bg-white/10 rounded-full text-sm hover:bg-white/20 transition mb-8">
        ← Kembali ke Malaysia
    </a>

    <!-- Box Tentang Wilayah -->
    <div class="bg-[#122334] p-8 rounded-2xl border border-white/5 mb-10">
        <h1 class="text-3xl font-serif font-bold mb-3 text-amber-400">Tentang Wilayah {{ $state['name'] }}</h1>
        <p class="text-gray-300 text-base leading-relaxed max-w-4xl">{{ $state['description'] }}</p>
    </div>

    <!-- Daftar Kota & Kabupaten -->
    <h2 class="text-3xl font-serif font-bold mb-6 text-amber-400">Kota & Kabupaten</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($state['cities'] as $citySlug => $city)
            <a href="{{ route('malaysia.city.show', $citySlug) }}" class="block bg-[#122334] p-6 rounded-2xl border border-white/5 hover:border-amber-400/50 hover:scale-[1.02] transition duration-200">
                <h3 class="text-xl font-bold text-amber-400 mb-3 flex items-center justify-between">
                    <span>{{ $city['name'] }}</span>
                    <span>→</span>
                </h3>
                <p class="text-sm text-gray-300 leading-relaxed">{{ Str::limit($city['description'], 90) }}</p>
            </a>
        @endforeach
    </div>

</body>
</html>