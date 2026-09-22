<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negeri {{ $state['name'] }} - Malaysia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0b1724] text-white min-h-screen">

    <div class="p-10 max-w-7xl mx-auto">
        <!-- Tombol Kembali -->
        <a href="{{ route('malaysia.index') }}" class="inline-flex items-center text-sm text-gray-400 hover:text-amber-400 mb-6 transition duration-200">
            &larr; Kembali ke Utama
        </a>

        <!-- Header Wilayah/Negeri -->
        <div class="bg-[#122334] p-8 rounded-2xl border border-white/5 mb-8">
            <span class="text-xs uppercase tracking-wider text-rose-400 font-semibold">WILAYAH MALAYSIA</span>
            <h1 class="text-4xl font-serif font-bold text-white mt-1 mb-3">{{ $state['name'] }}</h1>
            <p class="text-gray-300 leading-relaxed max-w-3xl">{{ $state['description'] }}</p>
        </div>

        <!-- Daftar Kota / Bandar -->
        <h2 class="text-2xl font-serif font-bold mb-6 text-white">Daftar Kota / Bandar</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($state['cities'] as $citySlug => $city)
                <div class="bg-[#122334] p-6 rounded-2xl border border-white/5 hover:border-amber-400/50 transition duration-200 flex flex-col justify-between">
                    <div>
                        <span class="text-xs uppercase tracking-wider text-amber-400 font-semibold">KOTA / BANDAR</span>
                        <h3 class="text-2xl font-bold mt-1 mb-3 text-white">{{ $city['name'] }}</h3>
                        <p class="text-sm text-gray-300 leading-relaxed mb-6">
                            {{ Str::limit($city['description'], 120) }}
                        </p>
                    </div>

                    <a href="{{ route('malaysia.cities.show', $citySlug) }}" class="inline-block text-center bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold py-2.5 px-4 rounded-xl transition duration-200">
                        Lihat Detail Kota
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>