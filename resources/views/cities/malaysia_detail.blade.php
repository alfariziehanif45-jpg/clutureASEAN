<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title_page ?? 'Detail Kota ' . ($city['name'] ?? '') }} | Malaysia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#071922] text-white min-h-screen">

    <!-- Hero Banner Bagian Atas -->
    <header class="relative min-h-[30vh] p-8 md:p-12 flex items-end bg-gradient-to-r from-[#072332]/90 to-[#a10f16]/70 bg-cover bg-center">
        <a href="javascript:history.back()" class="absolute top-6 left-8 text-white/80 hover:text-white transition text-sm font-medium">
            ← Kembali
        </a>
        <div>
            <h1 class="text-4xl md:text-6xl font-serif font-bold tracking-tight">{{ $city['name'] ?? 'Malaysia' }}</h1>
        </div>
    </header>

    <!-- Content Box Utama -->
    <main class="max-w-6xl mx-auto px-6 py-10">
        <div class="bg-[#0e2735] p-8 md:p-12 rounded-3xl border border-white/10 shadow-2xl">
            <!-- Judul Halaman Kategori -->
            <h2 class="text-2xl md:text-3xl font-serif font-bold text-amber-400 mb-8">
                {{ $title_page ?? 'Daftar Komponen Khas' }}
            </h2>

            <!-- List Item -->
            <div class="flex flex-col gap-10">
                @forelse($items ?? [] as $item)
                    <div class="flex flex-col md:flex-row gap-8 items-center md:items-start border-b border-white/10 pb-10 last:border-0 last:pb-0">
                        
                        <!-- Box Gambar (Fleksibel Mengikuti Ukuran & Bentuk Foto) -->
                        <div class="w-full md:w-80 shrink-0 bg-[#071922] rounded-2xl overflow-hidden border border-white/10 p-1.5 flex items-center justify-center h-auto self-start">
                            @if(isset($item['image']) && file_exists(public_path($item['image'])))
                                <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] ?? $item['title'] ?? 'Gambar' }}" class="w-full h-auto rounded-xl object-contain block">
                            @else
                                <div class="w-full h-48 flex items-center justify-center text-gray-500 text-xs py-8">
                                    Gambar belum tersedia
                                </div>
                            @endif
                        </div>

                        <!-- Box Deskripsi Teks -->
                        <div class="flex-1 pt-1">
                            <!-- Judul Item (Mendukung fallback 'name' atau 'title') -->
                            <h3 class="text-2xl font-serif font-bold text-amber-400 mb-3">
                                {{ $item['name'] ?? $item['title'] ?? 'Nama Tidak Tersedia' }}
                            </h3>
                            <p class="text-gray-300 text-base leading-relaxed">
                                {{ $item['description'] ?? 'Deskripsi belum tersedia.' }}
                            </p>
                        </div>

                    </div>
                @empty
                    <p class="text-gray-400 text-sm">Data belum tersedia untuk kategori ini.</p>
                @endforelse
            </div>

        </div>
    </main>

</body>
</html>